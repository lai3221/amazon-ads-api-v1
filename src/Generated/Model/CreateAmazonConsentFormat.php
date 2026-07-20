<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Captures information as to whether a user has consented to their data being used for advertising purposes.
 *
 * @generated from Amazon Ads API v1 schema CreateAmazonConsentFormat.
 */
final class CreateAmazonConsentFormat extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAmazonConsentFormat';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'amznAdStorage' => [
            'type' => 'enum',
            'class' => ConsentStatus::class,
            'required' => false,
            'nullable' => false,
        ],
        'amznUserData' => [
            'type' => 'enum',
            'class' => ConsentStatus::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the amznAdStorage value.
     *
     * @return ConsentStatus|null
     */
    public function getAmznAdStorage(): ?ConsentStatus
    {
        /** @var ConsentStatus|null $value */
        $value = $this->getAttribute('amznAdStorage');

        return $value;
    }

    /**
     * Sets the amznAdStorage value.
     *
     * @param ConsentStatus|string|null $value New property value.
     * @return $this
     */
    public function setAmznAdStorage(ConsentStatus|string|null $value): self
    {
        $this->setAttribute('amznAdStorage', $value);

        return $this;
    }

    /**
     * Returns the amznUserData value.
     *
     * @return ConsentStatus|null
     */
    public function getAmznUserData(): ?ConsentStatus
    {
        /** @var ConsentStatus|null $value */
        $value = $this->getAttribute('amznUserData');

        return $value;
    }

    /**
     * Sets the amznUserData value.
     *
     * @param ConsentStatus|string|null $value New property value.
     * @return $this
     */
    public function setAmznUserData(ConsentStatus|string|null $value): self
    {
        $this->setAttribute('amznUserData', $value);

        return $this;
    }
}
