<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The consumption of a promotion reward against a specific invoice.
 *
 * @generated from Amazon Ads API v1 schema PromotionRewardConsumption.
 */
final class PromotionRewardConsumption extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionRewardConsumption';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'consumedReward' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'invoiceId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The click credits amount of the promotion reward applied to this invoice..
     *
     * @return int|float|null
     */
    public function getConsumedReward(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('consumedReward');

        return $value;
    }

    /**
     * Sets The click credits amount of the promotion reward applied to this invoice..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setConsumedReward(int|float|null $value): self
    {
        $this->setAttribute('consumedReward', $value);

        return $this;
    }

    /**
     * Returns The invoice against which the promotion reward was applied. Null only for in-progress consumption that has not yet been settled to an invoice; once an invoice is issued, this is always populated. Consumers should treat null as a 'pending invoice' state..
     *
     * @return string|null
     */
    public function getInvoiceId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('invoiceId');

        return $value;
    }

    /**
     * Sets The invoice against which the promotion reward was applied. Null only for in-progress consumption that has not yet been settled to an invoice; once an invoice is issued, this is always populated. Consumers should treat null as a 'pending invoice' state..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setInvoiceId(?string $value): self
    {
        $this->setAttribute('invoiceId', $value);

        return $this;
    }
}
