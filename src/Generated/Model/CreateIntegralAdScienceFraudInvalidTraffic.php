<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateIntegralAdScienceFraudInvalidTraffic schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateIntegralAdScienceFraudInvalidTraffic.
 */
final class CreateIntegralAdScienceFraudInvalidTraffic extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateIntegralAdScienceFraudInvalidTraffic';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'targetSetting' => [
            'type' => 'enum',
            'class' => IASFraudInvalidTrafficType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the targetSetting value.
     *
     * @return IASFraudInvalidTrafficType|null
     */
    public function getTargetSetting(): ?IASFraudInvalidTrafficType
    {
        /** @var IASFraudInvalidTrafficType|null $value */
        $value = $this->getAttribute('targetSetting');

        return $value;
    }

    /**
     * Sets the targetSetting value.
     *
     * @param IASFraudInvalidTrafficType|string|null $value New property value.
     * @return $this
     */
    public function setTargetSetting(IASFraudInvalidTrafficType|string|null $value): self
    {
        $this->setAttribute('targetSetting', $value);

        return $this;
    }
}
