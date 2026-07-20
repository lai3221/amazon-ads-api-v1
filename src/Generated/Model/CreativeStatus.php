<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreativeStatus schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreativeStatus.
 */
final class CreativeStatus extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreativeStatus';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'moderationStatus' => [
            'type' => 'enum',
            'class' => ModerationStatus::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the moderationStatus value.
     *
     * @return ModerationStatus|null
     */
    public function getModerationStatus(): ?ModerationStatus
    {
        /** @var ModerationStatus|null $value */
        $value = $this->getAttribute('moderationStatus');

        return $value;
    }

    /**
     * Sets the moderationStatus value.
     *
     * @param ModerationStatus|string|null $value New property value.
     * @return $this
     */
    public function setModerationStatus(ModerationStatus|string|null $value): self
    {
        $this->setAttribute('moderationStatus', $value);

        return $this;
    }
}
