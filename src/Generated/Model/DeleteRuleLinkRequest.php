<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DeleteRuleLinkRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DeleteRuleLinkRequest.
 */
final class DeleteRuleLinkRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DeleteRuleLinkRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'ruleLinkIds' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => RuleLinkIdentity::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the ruleLinkIds value.
     *
     * @return list<RuleLinkIdentity>|null
     */
    public function getRuleLinkIds(): ?array
    {
        /** @var list<RuleLinkIdentity>|null $value */
        $value = $this->getAttribute('ruleLinkIds');

        return $value;
    }

    /**
     * Sets the ruleLinkIds value.
     *
     * @param list<RuleLinkIdentity>|null $value New property value.
     * @return $this
     */
    public function setRuleLinkIds(?array $value): self
    {
        $this->setAttribute('ruleLinkIds', $value);

        return $this;
    }
}
