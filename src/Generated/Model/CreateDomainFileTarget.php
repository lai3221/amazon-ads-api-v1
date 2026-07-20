<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets domains based on list provided via file upload.
 *
 * @generated from Amazon Ads API v1 schema CreateDomainFileTarget.
 */
final class CreateDomainFileTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDomainFileTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'domainFileKey' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'domainFileName' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The S3 key of the uploaded file which can be obtained from the file upload policy endpoint. A max of 10 files may be associated to one ad group..
     *
     * @return string|null
     */
    public function getDomainFileKey(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('domainFileKey');

        return $value;
    }

    /**
     * Sets The S3 key of the uploaded file which can be obtained from the file upload policy endpoint. A max of 10 files may be associated to one ad group..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDomainFileKey(?string $value): self
    {
        $this->setAttribute('domainFileKey', $value);

        return $this;
    }

    /**
     * Returns The name of the file..
     *
     * @return string|null
     */
    public function getDomainFileName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('domainFileName');

        return $value;
    }

    /**
     * Sets The name of the file..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDomainFileName(?string $value): self
    {
        $this->setAttribute('domainFileName', $value);

        return $this;
    }
}
