<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Structure containing the content elements of a store page.
 *
 * @generated from Amazon Ads API v1 schema UpdateStorePageContent.
 */
final class UpdateStorePageContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateStorePageContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'description' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'template' => [
            'type' => 'enum',
            'class' => StorePageTemplate::class,
            'required' => false,
            'nullable' => false,
        ],
        'title' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'widgets' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateStorePageWidget::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
    ];

    /**
     * Returns Description of the page..
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
     * Sets Description of the page..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDescription(?string $value): self
    {
        $this->setAttribute('description', $value);

        return $this;
    }

    /**
     * Returns the template value.
     *
     * @return StorePageTemplate|null
     */
    public function getTemplate(): ?StorePageTemplate
    {
        /** @var StorePageTemplate|null $value */
        $value = $this->getAttribute('template');

        return $value;
    }

    /**
     * Sets the template value.
     *
     * @param StorePageTemplate|string|null $value New property value.
     * @return $this
     */
    public function setTemplate(StorePageTemplate|string|null $value): self
    {
        $this->setAttribute('template', $value);

        return $this;
    }

    /**
     * Returns For store page, title of the page; for SB landing page, this can be optional..
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('title');

        return $value;
    }

    /**
     * Sets For store page, title of the page; for SB landing page, this can be optional..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTitle(?string $value): self
    {
        $this->setAttribute('title', $value);

        return $this;
    }

    /**
     * Returns Collection of widgets displayed on the page..
     *
     * @return list<CreateStorePageWidget>|null
     */
    public function getWidgets(): ?array
    {
        /** @var list<CreateStorePageWidget>|null $value */
        $value = $this->getAttribute('widgets');

        return $value;
    }

    /**
     * Sets Collection of widgets displayed on the page..
     *
     * @param list<CreateStorePageWidget>|null $value New property value.
     * @return $this
     */
    public function setWidgets(?array $value): self
    {
        $this->setAttribute('widgets', $value);

        return $this;
    }
}
