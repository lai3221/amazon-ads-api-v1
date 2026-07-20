<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The details to explain rejected eligibility request status which contains code and description.
 *
 * @generated from Amazon Ads API v1 schema CreateRejectedReasonDetail.
 */
final class CreateRejectedReasonDetail extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateRejectedReasonDetail';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'code' => [
            'type' => 'enum',
            'class' => RejectedReasonDetailCode::class,
            'required' => true,
            'nullable' => false,
        ],
        'description' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the code value.
     *
     * @return RejectedReasonDetailCode|null
     */
    public function getCode(): ?RejectedReasonDetailCode
    {
        /** @var RejectedReasonDetailCode|null $value */
        $value = $this->getAttribute('code');

        return $value;
    }

    /**
     * Sets the code value.
     *
     * @param RejectedReasonDetailCode|string|null $value New property value.
     * @return $this
     */
    public function setCode(RejectedReasonDetailCode|string|null $value): self
    {
        $this->setAttribute('code', $value);

        return $this;
    }

    /**
     * Returns The description to explain rejected eligibility request status..
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('description');

        return $value;
    }

    /**
     * Sets The description to explain rejected eligibility request status..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDescription(?string $value): self
    {
        $this->setAttribute('description', $value);

        return $this;
    }
}
