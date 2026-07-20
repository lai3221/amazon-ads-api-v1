<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * An individual audience targeting entry. Entries sharing the same groupId are OR'd (union). Included groups (negative=false) are AND'd (intersection) across groups. All audiences in a negative group are OR'd, then excluded (AND NOT).
 *
 * @generated from Amazon Ads API v1 schema AudienceTargetingEntry.
 */
final class AudienceTargetingEntry extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AudienceTargetingEntry';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'audienceId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'groupId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'negative' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The audience segment to target..
     *
     * @return string|null
     */
    public function getAudienceId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('audienceId');

        return $value;
    }

    /**
     * Sets The audience segment to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAudienceId(?string $value): self
    {
        $this->setAttribute('audienceId', $value);

        return $this;
    }

    /**
     * Returns Identifies the group this audience belongs to. Audiences sharing the same groupId are OR'd together. Use any unique string per group (e.g. '1', '2')..
     *
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('groupId');

        return $value;
    }

    /**
     * Sets Identifies the group this audience belongs to. Audiences sharing the same groupId are OR'd together. Use any unique string per group (e.g. '1', '2')..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGroupId(?string $value): self
    {
        $this->setAttribute('groupId', $value);

        return $this;
    }

    /**
     * Returns When true, this audience belongs to a negative (exclusion) group. Defaults to false when omitted..
     *
     * @return bool|null
     */
    public function getNegative(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('negative');

        return $value;
    }

    /**
     * Sets When true, this audience belongs to a negative (exclusion) group. Defaults to false when omitted..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setNegative(?bool $value): self
    {
        $this->setAttribute('negative', $value);

        return $this;
    }
}
