<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on user application.
 *
 * @generated from Amazon Ads API v1 schema CreateAppTarget.
 */
final class CreateAppTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAppTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'appId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'appType' => [
            'type' => 'enum',
            'class' => AppType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The app identifier being targeted..
     *
     * @return string|null
     */
    public function getAppId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('appId');

        return $value;
    }

    /**
     * Sets The app identifier being targeted..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAppId(?string $value): self
    {
        $this->setAttribute('appId', $value);

        return $this;
    }

    /**
     * Returns the appType value.
     *
     * @return AppType|null
     */
    public function getAppType(): ?AppType
    {
        /** @var AppType|null $value */
        $value = $this->getAttribute('appType');

        return $value;
    }

    /**
     * Sets the appType value.
     *
     * @param AppType|string|null $value New property value.
     * @return $this
     */
    public function setAppType(AppType|string|null $value): self
    {
        $this->setAttribute('appType', $value);

        return $this;
    }
}
