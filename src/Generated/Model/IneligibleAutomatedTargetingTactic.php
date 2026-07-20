<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Information about an ineligible tactic key and the reasons for ineligibility.
 *
 * @generated from Amazon Ads API v1 schema IneligibleAutomatedTargetingTactic.
 */
final class IneligibleAutomatedTargetingTactic extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IneligibleAutomatedTargetingTactic';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'reasons' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => IneligibleAutomatedTargetingTacticReason::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 10,
        ],
        'tacticKey' => [
            'type' => 'model',
            'class' => TacticKey::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns List of reasons why this tactic key is ineligible..
     *
     * @return list<IneligibleAutomatedTargetingTacticReason>|null
     */
    public function getReasons(): ?array
    {
        /** @var list<IneligibleAutomatedTargetingTacticReason>|null $value */
        $value = $this->getAttribute('reasons');

        return $value;
    }

    /**
     * Sets List of reasons why this tactic key is ineligible..
     *
     * @param list<IneligibleAutomatedTargetingTacticReason>|null $value New property value.
     * @return $this
     */
    public function setReasons(?array $value): self
    {
        $this->setAttribute('reasons', $value);

        return $this;
    }

    /**
     * Returns the tacticKey value.
     *
     * @return TacticKey|null
     */
    public function getTacticKey(): ?TacticKey
    {
        /** @var TacticKey|null $value */
        $value = $this->getAttribute('tacticKey');

        return $value;
    }

    /**
     * Sets the tacticKey value.
     *
     * @param TacticKey|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTacticKey(TacticKey|array|null $value): self
    {
        $this->setAttribute('tacticKey', $value);

        return $this;
    }
}
