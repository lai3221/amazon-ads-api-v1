<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Error schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Error.
 */
final class Error extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Error';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'code' => [
            'type' => 'enum',
            'class' => ErrorCode::class,
            'required' => true,
            'nullable' => false,
        ],
        'fieldLocation' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'message' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the code value.
     *
     * @return ErrorCode|null
     */
    public function getCode(): ?ErrorCode
    {
        /** @var ErrorCode|null $value */
        $value = $this->getAttribute('code');

        return $value;
    }

    /**
     * Sets the code value.
     *
     * @param ErrorCode|string|null $value New property value.
     * @return $this
     */
    public function setCode(ErrorCode|string|null $value): self
    {
        $this->setAttribute('code', $value);

        return $this;
    }

    /**
     * Returns the fieldLocation value.
     *
     * @return string|null
     */
    public function getFieldLocation(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('fieldLocation');

        return $value;
    }

    /**
     * Sets the fieldLocation value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setFieldLocation(?string $value): self
    {
        $this->setAttribute('fieldLocation', $value);

        return $this;
    }

    /**
     * Returns the message value.
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('message');

        return $value;
    }

    /**
     * Sets the message value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setMessage(?string $value): self
    {
        $this->setAttribute('message', $value);

        return $this;
    }
}
