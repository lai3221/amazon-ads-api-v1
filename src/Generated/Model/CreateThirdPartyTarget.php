<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateThirdPartyTarget schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateThirdPartyTarget.
 */
final class CreateThirdPartyTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateThirdPartyTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'thirdPartyTargetDetails' => [
            'type' => 'model',
            'class' => CreateThirdPartyTargetDetails::class,
            'required' => true,
            'nullable' => false,
        ],
        'thirdPartyTargetType' => [
            'type' => 'enum',
            'class' => ThirdPartyTargetType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the thirdPartyTargetDetails value.
     *
     * @return CreateThirdPartyTargetDetails|null
     */
    public function getThirdPartyTargetDetails(): ?CreateThirdPartyTargetDetails
    {
        /** @var CreateThirdPartyTargetDetails|null $value */
        $value = $this->getAttribute('thirdPartyTargetDetails');

        return $value;
    }

    /**
     * Sets the thirdPartyTargetDetails value.
     *
     * @param CreateThirdPartyTargetDetails|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setThirdPartyTargetDetails(CreateThirdPartyTargetDetails|array|null $value): self
    {
        $this->setAttribute('thirdPartyTargetDetails', $value);

        return $this;
    }

    /**
     * Returns the thirdPartyTargetType value.
     *
     * @return ThirdPartyTargetType|null
     */
    public function getThirdPartyTargetType(): ?ThirdPartyTargetType
    {
        /** @var ThirdPartyTargetType|null $value */
        $value = $this->getAttribute('thirdPartyTargetType');

        return $value;
    }

    /**
     * Sets the thirdPartyTargetType value.
     *
     * @param ThirdPartyTargetType|string|null $value New property value.
     * @return $this
     */
    public function setThirdPartyTargetType(ThirdPartyTargetType|string|null $value): self
    {
        $this->setAttribute('thirdPartyTargetType', $value);

        return $this;
    }
}
