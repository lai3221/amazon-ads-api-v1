<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateTargetRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateTargetRequest.
 */
final class CreateTargetRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateTargetRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'targets' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => TargetCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Returns the targets value.
     *
     * @return list<TargetCreate>|null
     */
    public function getTargets(): ?array
    {
        /** @var list<TargetCreate>|null $value */
        $value = $this->getAttribute('targets');

        return $value;
    }

    /**
     * Sets the targets value.
     *
     * @param list<TargetCreate>|null $value New property value.
     * @return $this
     */
    public function setTargets(?array $value): self
    {
        $this->setAttribute('targets', $value);

        return $this;
    }
}
