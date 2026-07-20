import fs from 'node:fs';
import path from 'node:path';

const specificationPath = process.argv[2] ?? '.openapi/amazon-ads-v1-all.json';
const specification = JSON.parse(fs.readFileSync(path.resolve(specificationPath), 'utf8'));
const schemas = specification.components?.schemas ?? {};

const stats = {
  total: 0,
  enum: 0,
  object: 0,
  array: 0,
  string: 0,
  integer: 0,
  number: 0,
  boolean: 0,
  topRef: 0,
  oneOf: 0,
  allOf: 0,
  anyOf: 0,
  noType: 0,
  additionalProperties: 0,
  nullable: 0,
  readOnly: 0,
};

const normalizedNames = new Map();
const collisions = [];

for (const [name, schema] of Object.entries(schemas)) {
  stats.total += 1;
  stats.enum += Number(Array.isArray(schema.enum));
  stats.topRef += Number('$ref' in schema);
  stats.oneOf += Number(Array.isArray(schema.oneOf));
  stats.allOf += Number(Array.isArray(schema.allOf));
  stats.anyOf += Number(Array.isArray(schema.anyOf));
  stats.additionalProperties += Number('additionalProperties' in schema);
  stats.nullable += Number(schema.nullable === true);
  stats.readOnly += Number(schema.readOnly === true);

  if (typeof schema.type === 'string' && schema.type in stats) {
    stats[schema.type] += 1;
  } else if (schema.type === undefined) {
    stats.noType += 1;
  }

  let normalized = name.replace(/[^A-Za-z0-9_]/g, '_');
  if (/^[0-9]/.test(normalized)) {
    normalized = `Schema_${normalized}`;
  }

  const key = normalized.toLowerCase();
  if (normalizedNames.has(key)) {
    collisions.push(`${normalizedNames.get(key)} <=> ${name} => ${normalized}`);
  } else {
    normalizedNames.set(key, name);
  }
}

const operations = [];
const methods = ['get', 'post', 'put', 'patch', 'delete', 'head', 'options', 'trace'];
for (const [url, pathItem] of Object.entries(specification.paths ?? {})) {
  for (const method of methods) {
    const operation = pathItem[method];
    if (!operation) {
      continue;
    }

    operations.push({
      method: method.toUpperCase(),
      path: url,
      operationId: operation.operationId,
      tags: operation.tags ?? [],
      parameters: operation.parameters ?? [],
      requestBody: operation.requestBody,
      responses: operation.responses ?? {},
    });
  }
}

console.log(JSON.stringify({
  openapi: specification.openapi,
  version: specification.info?.version,
  servers: specification.servers?.map((server) => server.url) ?? [],
  paths: Object.keys(specification.paths ?? {}).length,
  operations: operations.length,
  tags: [...new Set(operations.flatMap((operation) => operation.tags))].sort(),
  schemaStats: stats,
  operationStats: {
    withRequestBody: operations.filter((operation) => operation.requestBody).length,
    requiredRequestBody: operations.filter((operation) => operation.requestBody?.required === true).length,
    requestBodyReferences: operations.filter((operation) =>
      operation.requestBody?.content?.['application/json']?.schema?.$ref,
    ).length,
    requestBodyInline: operations.filter((operation) => {
      const schema = operation.requestBody?.content?.['application/json']?.schema;
      return schema && !schema.$ref;
    }).length,
    queryParameters: operations.reduce((count, operation) => count + operation.parameters.filter((parameter) => {
      const resolved = parameter.$ref
        ? specification.components?.parameters?.[parameter.$ref.split('/').at(-1)]
        : parameter;
      return resolved?.in === 'query';
    }).length, 0),
    headerParameters: operations.reduce((count, operation) => count + operation.parameters.filter((parameter) => {
      const resolved = parameter.$ref
        ? specification.components?.parameters?.[parameter.$ref.split('/').at(-1)]
        : parameter;
      return resolved?.in === 'header';
    }).length, 0),
    pathParameters: operations.reduce((count, operation) => count + operation.parameters.filter((parameter) => {
      const resolved = parameter.$ref
        ? specification.components?.parameters?.[parameter.$ref.split('/').at(-1)]
        : parameter;
      return resolved?.in === 'path';
    }).length, 0),
    successResponseReferences: operations.filter((operation) => Object.entries(operation.responses)
      .some(([status, response]) => /^2/.test(status)
        && response.content?.['application/json']?.schema?.$ref)).length,
    successResponseInline: operations.filter((operation) => Object.entries(operation.responses)
      .some(([status, response]) => {
        const schema = response.content?.['application/json']?.schema;
        return /^2/.test(status) && schema && !schema.$ref;
      })).length,
  },
  propertyStats: (() => {
    const properties = Object.values(schemas).flatMap((schema) => Object.entries(schema.properties ?? {}));
    return {
      total: properties.length,
      references: properties.filter(([, schema]) => schema.$ref).length,
      arrays: properties.filter(([, schema]) => schema.type === 'array').length,
      inlineObjects: properties.filter(([, schema]) => schema.type === 'object').length,
      enums: properties.filter(([, schema]) => Array.isArray(schema.enum)).length,
      nullable: properties.filter(([, schema]) => schema.nullable === true).length,
      invalidPhpIdentifiers: [...new Set(properties
        .map(([name]) => name)
        .filter((name) => !/^[A-Za-z_][A-Za-z0-9_]*$/.test(name)))].sort(),
      reservedPhpIdentifiers: [...new Set(properties
        .map(([name]) => name)
        .filter((name) => ['class', 'function', 'trait', 'interface', 'enum', 'extends', 'implements',
          'public', 'protected', 'private', 'static', 'abstract', 'final', 'readonly', 'match',
          'new', 'clone', 'throw', 'return', 'yield', 'null', 'true', 'false'].includes(name.toLowerCase())))].sort(),
    };
  })(),
  normalizedNameCollisions: collisions,
  oneOfSamples: Object.entries(schemas)
    .filter(([, schema]) => Array.isArray(schema.oneOf))
    .slice(0, 50)
    .map(([name, schema]) => ({
      name,
      type: schema.type,
      variants: schema.oneOf.length,
      propertyCount: Object.keys(schema.properties ?? {}).length,
      discriminator: schema.discriminator?.propertyName,
    })),
  allOfSamples: Object.entries(schemas)
    .filter(([, schema]) => Array.isArray(schema.allOf))
    .slice(0, 50)
    .map(([name, schema]) => ({
      name,
      type: schema.type,
      variants: schema.allOf.length,
      propertyCount: Object.keys(schema.properties ?? {}).length,
    })),
  untypedSamples: Object.entries(schemas)
    .filter(([, schema]) => schema.type === undefined && schema.$ref === undefined)
    .slice(0, 80)
    .map(([name, schema]) => ({ name, keys: Object.keys(schema) })),
}, null, 2));
