<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Theme targets let advertisers select high-performing targets based on a common theme.
 *
 * @generated from Amazon Ads API v1 schema CreateThemeTarget.
 */
final class CreateThemeTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateThemeTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'matchType' => [
            'type' => 'enum',
            'class' => ThemeMatchType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the matchType value.
     *
     * @return ThemeMatchType|null
     */
    public function getMatchType(): ?ThemeMatchType
    {
        /** @var ThemeMatchType|null $value */
        $value = $this->getAttribute('matchType');

        return $value;
    }

    /**
     * Sets the matchType value.
     *
     * @param ThemeMatchType|string|null $value New property value.
     * @return $this
     */
    public function setMatchType(ThemeMatchType|string|null $value): self
    {
        $this->setAttribute('matchType', $value);

        return $this;
    }
}
