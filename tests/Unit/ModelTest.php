<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Tests\Unit;

use Lai3221\AmazonAdsApiV1\Exception\ValidationException;
use Lai3221\AmazonAdsApiV1\Generated\Model\AdProduct;
use Lai3221\AmazonAdsApiV1\Generated\Model\Campaign;
use Lai3221\AmazonAdsApiV1\Generated\Model\CampaignCreate;
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateCampaignRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateCreative;
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateState;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * Verifies generated model hydration, validation, and serialization behavior.
 */
final class ModelTest extends TestCase
{
    /**
     * Confirms nested objects and backed enums hydrate from constructor arrays.
     */
    #[Test]
    public function itHydratesAndSerializesNestedGeneratedModels(): void
    {
        $request = new CreateCampaignRequest([
            'campaigns' => [[
                'adProduct' => 'SPONSORED_PRODUCTS',
                'name' => 'Summer launch',
                'state' => 'PAUSED',
            ]],
        ]);

        $campaigns = $request->getCampaigns();
        if ($campaigns === null || !isset($campaigns[0])) {
            self::fail('Expected the generated campaign list to contain one item.');
        }

        $campaign = $campaigns[0];

        self::assertInstanceOf(CampaignCreate::class, $campaign);
        self::assertSame(AdProduct::SPONSORED_PRODUCTS, $campaign->getAdProduct());
        self::assertSame(CreateState::PAUSED, $campaign->getState());

        $request->validate();

        self::assertSame([
            'campaigns' => [[
                'adProduct' => 'SPONSORED_PRODUCTS',
                'name' => 'Summer launch',
                'state' => 'PAUSED',
            ]],
        ], $request->toArray());
    }

    /**
     * Confirms missing OpenAPI-required fields fail validation before transport.
     */
    #[Test]
    public function itRejectsAMissingRequiredProperty(): void
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('CreateCampaignRequest.campaigns is required.');

        (new CreateCampaignRequest())->validate();
    }

    /**
     * Confirms ISO-8601 values hydrate as immutable date-time objects.
     */
    #[Test]
    public function itHydratesDateTimeProperties(): void
    {
        $campaign = new Campaign([
            'creationDateTime' => '2026-07-20T10:30:00+00:00',
        ]);

        self::assertSame('2026-07-20T10:30:00+00:00', $campaign->getCreationDateTime()?->format(DATE_ATOM));
    }

    /**
     * Confirms oneOf models preserve and validate the selected JSON shape.
     */
    #[Test]
    public function itPreservesASelectedOneOfVariant(): void
    {
        $creative = new CreateCreative([
            'productCreative' => ['headline' => 'Example'],
        ]);

        $creative->validate();

        self::assertSame([
            'productCreative' => ['headline' => 'Example'],
        ], $creative->toArray());
    }

    /**
     * Confirms unknown server fields survive response-model round trips.
     */
    #[Test]
    public function itPreservesUnknownFutureFields(): void
    {
        $campaign = new Campaign(['futureField' => 'future-value']);

        self::assertSame(['futureField' => 'future-value'], $campaign->unknownAttributes());
        self::assertSame('future-value', $campaign->toArray()['futureField']);
    }
}
