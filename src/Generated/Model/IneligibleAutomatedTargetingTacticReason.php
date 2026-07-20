<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A single reason for tactic type ineligibility.
 *
 * @generated from Amazon Ads API v1 schema IneligibleAutomatedTargetingTacticReason.
 */
final class IneligibleAutomatedTargetingTacticReason extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IneligibleAutomatedTargetingTacticReason';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'reasonCode' => [
            'type' => 'enum',
            'class' => IneligibleAutomatedTargetingTacticReasonCode::class,
            'required' => true,
            'nullable' => false,
        ],
        'reasonMessage' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the reasonCode value.
     *
     * @return IneligibleAutomatedTargetingTacticReasonCode|null
     */
    public function getReasonCode(): ?IneligibleAutomatedTargetingTacticReasonCode
    {
        /** @var IneligibleAutomatedTargetingTacticReasonCode|null $value */
        $value = $this->getAttribute('reasonCode');

        return $value;
    }

    /**
     * Sets the reasonCode value.
     *
     * @param IneligibleAutomatedTargetingTacticReasonCode|string|null $value New property value.
     * @return $this
     */
    public function setReasonCode(IneligibleAutomatedTargetingTacticReasonCode|string|null $value): self
    {
        $this->setAttribute('reasonCode', $value);

        return $this;
    }

    /**
     * Returns Human readable explanation of why this tactic type is ineligible..
     *
     * @return string|null
     */
    public function getReasonMessage(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('reasonMessage');

        return $value;
    }

    /**
     * Sets Human readable explanation of why this tactic type is ineligible..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setReasonMessage(?string $value): self
    {
        $this->setAttribute('reasonMessage', $value);

        return $this;
    }
}
