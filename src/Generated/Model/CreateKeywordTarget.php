<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets a specific customer search term.
 *
 * @generated from Amazon Ads API v1 schema CreateKeywordTarget.
 */
final class CreateKeywordTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateKeywordTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'keyword' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'matchType' => [
            'type' => 'enum',
            'class' => KeywordMatchType::class,
            'required' => true,
            'nullable' => false,
        ],
        'nativeLanguageKeyword' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'nativeLanguageLocale' => [
            'type' => 'enum',
            'class' => LanguageLocale::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The customer search term or text to target. For valid characters and constraints,..
     *
     * @return string|null
     */
    public function getKeyword(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('keyword');

        return $value;
    }

    /**
     * Sets The customer search term or text to target. For valid characters and constraints,..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setKeyword(?string $value): self
    {
        $this->setAttribute('keyword', $value);

        return $this;
    }

    /**
     * Returns the matchType value.
     *
     * @return KeywordMatchType|null
     */
    public function getMatchType(): ?KeywordMatchType
    {
        /** @var KeywordMatchType|null $value */
        $value = $this->getAttribute('matchType');

        return $value;
    }

    /**
     * Sets the matchType value.
     *
     * @param KeywordMatchType|string|null $value New property value.
     * @return $this
     */
    public function setMatchType(KeywordMatchType|string|null $value): self
    {
        $this->setAttribute('matchType', $value);

        return $this;
    }

    /**
     * Returns The unlocalized keyword text in the preferred locale of the advertiser..
     *
     * @return string|null
     */
    public function getNativeLanguageKeyword(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nativeLanguageKeyword');

        return $value;
    }

    /**
     * Sets The unlocalized keyword text in the preferred locale of the advertiser..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNativeLanguageKeyword(?string $value): self
    {
        $this->setAttribute('nativeLanguageKeyword', $value);

        return $this;
    }

    /**
     * Returns the nativeLanguageLocale value.
     *
     * @return LanguageLocale|null
     */
    public function getNativeLanguageLocale(): ?LanguageLocale
    {
        /** @var LanguageLocale|null $value */
        $value = $this->getAttribute('nativeLanguageLocale');

        return $value;
    }

    /**
     * Sets the nativeLanguageLocale value.
     *
     * @param LanguageLocale|string|null $value New property value.
     * @return $this
     */
    public function setNativeLanguageLocale(LanguageLocale|string|null $value): self
    {
        $this->setAttribute('nativeLanguageLocale', $value);

        return $this;
    }
}
