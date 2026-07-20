<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionCodeRedemptionMultiStatusResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionCodeRedemptionMultiStatusResponse.
 */
final class PromotionCodeRedemptionMultiStatusResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionCodeRedemptionMultiStatusResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'contentLanguage' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'error' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => ErrorsIndex::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'success' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => PromotionCodeRedemptionMultiStatusSuccess::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
    ];

    /**
     * Returns the contentLanguage value.
     *
     * @return string|null
     */
    public function getContentLanguage(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('contentLanguage');

        return $value;
    }

    /**
     * Sets the contentLanguage value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setContentLanguage(?string $value): self
    {
        $this->setAttribute('contentLanguage', $value);

        return $this;
    }

    /**
     * Returns the error value.
     *
     * @return list<ErrorsIndex>|null
     */
    public function getError(): ?array
    {
        /** @var list<ErrorsIndex>|null $value */
        $value = $this->getAttribute('error');

        return $value;
    }

    /**
     * Sets the error value.
     *
     * @param list<ErrorsIndex>|null $value New property value.
     * @return $this
     */
    public function setError(?array $value): self
    {
        $this->setAttribute('error', $value);

        return $this;
    }

    /**
     * Returns the success value.
     *
     * @return list<PromotionCodeRedemptionMultiStatusSuccess>|null
     */
    public function getSuccess(): ?array
    {
        /** @var list<PromotionCodeRedemptionMultiStatusSuccess>|null $value */
        $value = $this->getAttribute('success');

        return $value;
    }

    /**
     * Sets the success value.
     *
     * @param list<PromotionCodeRedemptionMultiStatusSuccess>|null $value New property value.
     * @return $this
     */
    public function setSuccess(?array $value): self
    {
        $this->setAttribute('success', $value);

        return $this;
    }
}
