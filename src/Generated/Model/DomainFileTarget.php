<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets domains based on list provided via file upload.
 *
 * @generated from Amazon Ads API v1 schema DomainFileTarget.
 */
final class DomainFileTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DomainFileTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'domainFileId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
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
        'domainFileUrl' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The ID associated to the domain file to target. Read-only and created based on the inputted domainFileKey..
     *
     * @return string|null
     */
    public function getDomainFileId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('domainFileId');

        return $value;
    }

    /**
     * Sets The ID associated to the domain file to target. Read-only and created based on the inputted domainFileKey..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDomainFileId(?string $value): self
    {
        $this->setAttribute('domainFileId', $value);

        return $this;
    }

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

    /**
     * Returns The file containing the domains uploaded. It expires in one hour..
     *
     * @return string|null
     */
    public function getDomainFileUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('domainFileUrl');

        return $value;
    }

    /**
     * Sets The file containing the domains uploaded. It expires in one hour..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDomainFileUrl(?string $value): self
    {
        $this->setAttribute('domainFileUrl', $value);

        return $this;
    }
}
