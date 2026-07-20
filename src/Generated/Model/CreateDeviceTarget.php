<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on user device.
 *
 * @generated from Amazon Ads API v1 schema CreateDeviceTarget.
 */
final class CreateDeviceTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDeviceTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'deviceOrientation' => [
            'type' => 'enum',
            'class' => DeviceOrientation::class,
            'required' => false,
            'nullable' => false,
        ],
        'deviceType' => [
            'type' => 'enum',
            'class' => DeviceType::class,
            'required' => true,
            'nullable' => false,
        ],
        'mobileDevice' => [
            'type' => 'enum',
            'class' => MobileDevice::class,
            'required' => false,
            'nullable' => false,
        ],
        'mobileEnvironment' => [
            'type' => 'enum',
            'class' => MobileEnvironment::class,
            'required' => false,
            'nullable' => false,
        ],
        'mobileOs' => [
            'type' => 'enum',
            'class' => MobileOs::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the deviceOrientation value.
     *
     * @return DeviceOrientation|null
     */
    public function getDeviceOrientation(): ?DeviceOrientation
    {
        /** @var DeviceOrientation|null $value */
        $value = $this->getAttribute('deviceOrientation');

        return $value;
    }

    /**
     * Sets the deviceOrientation value.
     *
     * @param DeviceOrientation|string|null $value New property value.
     * @return $this
     */
    public function setDeviceOrientation(DeviceOrientation|string|null $value): self
    {
        $this->setAttribute('deviceOrientation', $value);

        return $this;
    }

    /**
     * Returns the deviceType value.
     *
     * @return DeviceType|null
     */
    public function getDeviceType(): ?DeviceType
    {
        /** @var DeviceType|null $value */
        $value = $this->getAttribute('deviceType');

        return $value;
    }

    /**
     * Sets the deviceType value.
     *
     * @param DeviceType|string|null $value New property value.
     * @return $this
     */
    public function setDeviceType(DeviceType|string|null $value): self
    {
        $this->setAttribute('deviceType', $value);

        return $this;
    }

    /**
     * Returns the mobileDevice value.
     *
     * @return MobileDevice|null
     */
    public function getMobileDevice(): ?MobileDevice
    {
        /** @var MobileDevice|null $value */
        $value = $this->getAttribute('mobileDevice');

        return $value;
    }

    /**
     * Sets the mobileDevice value.
     *
     * @param MobileDevice|string|null $value New property value.
     * @return $this
     */
    public function setMobileDevice(MobileDevice|string|null $value): self
    {
        $this->setAttribute('mobileDevice', $value);

        return $this;
    }

    /**
     * Returns the mobileEnvironment value.
     *
     * @return MobileEnvironment|null
     */
    public function getMobileEnvironment(): ?MobileEnvironment
    {
        /** @var MobileEnvironment|null $value */
        $value = $this->getAttribute('mobileEnvironment');

        return $value;
    }

    /**
     * Sets the mobileEnvironment value.
     *
     * @param MobileEnvironment|string|null $value New property value.
     * @return $this
     */
    public function setMobileEnvironment(MobileEnvironment|string|null $value): self
    {
        $this->setAttribute('mobileEnvironment', $value);

        return $this;
    }

    /**
     * Returns the mobileOs value.
     *
     * @return MobileOs|null
     */
    public function getMobileOs(): ?MobileOs
    {
        /** @var MobileOs|null $value */
        $value = $this->getAttribute('mobileOs');

        return $value;
    }

    /**
     * Sets the mobileOs value.
     *
     * @param MobileOs|string|null $value New property value.
     * @return $this
     */
    public function setMobileOs(MobileOs|string|null $value): self
    {
        $this->setAttribute('mobileOs', $value);

        return $this;
    }
}
