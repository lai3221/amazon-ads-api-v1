<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Content genre for targeting. Supported values depend on the ad group's inventoryType. Using a value not supported for the given inventoryType will result in an error.
 *
 * @generated from Amazon Ads API v1 schema ContentGenre.
 */
enum ContentGenre: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ContentGenre';

    case ACTION = 'ACTION';
    case ADVENTURE = 'ADVENTURE';
    case ALTERNATIVE_ROCK = 'ALTERNATIVE_ROCK';
    case ANIMATION = 'ANIMATION';
    case ARTS = 'ARTS';
    case BIOGRAPHY = 'BIOGRAPHY';
    case BLUES = 'BLUES';
    case BUSINESS = 'BUSINESS';
    case CHILDRENS_MUSIC = 'CHILDRENS_MUSIC';
    case CHRISTIAN_GOSPEL = 'CHRISTIAN_GOSPEL';
    case CHRISTMAS_HOLIDAY = 'CHRISTMAS_HOLIDAY';
    case CLASSICAL = 'CLASSICAL';
    case CLASSIC_ROCK = 'CLASSIC_ROCK';
    case COLLEGE_RADIO = 'COLLEGE_RADIO';
    case COMEDY = 'COMEDY';
    case COUNTRY = 'COUNTRY';
    case CRIME = 'CRIME';
    case DANCE_DJ = 'DANCE_DJ';
    case DOCUMENTARY = 'DOCUMENTARY';
    case DRAMA = 'DRAMA';
    case EASY_LISTENING = 'EASY_LISTENING';
    case EDUCATION = 'EDUCATION';
    case EUROPEAN_POP_FOLK = 'EUROPEAN_POP_FOLK';
    case FAMILY = 'FAMILY';
    case FANTASY = 'FANTASY';
    case FICTION = 'FICTION';
    case FILM_NOIR = 'FILM_NOIR';
    case FOLK = 'FOLK';
    case FRENCH_VARIETY = 'FRENCH_VARIETY';
    case GAME_SHOW = 'GAME_SHOW';
    case GENRE_NOT_AVAILABLE = 'GENRE_NOT_AVAILABLE';
    case GERMAN_ROCK_POP = 'GERMAN_ROCK_POP';
    case GOVERNMENT = 'GOVERNMENT';
    case HARD_ROCK_METAL = 'HARD_ROCK_METAL';
    case HEALTH_AND_FITNESS = 'HEALTH_AND_FITNESS';
    case HISTORY = 'HISTORY';
    case HORROR = 'HORROR';
    case INTERNATIONAL = 'INTERNATIONAL';
    case JAPANESE = 'JAPANESE';
    case JAZZ = 'JAZZ';
    case KIDS_AND_FAMILY = 'KIDS_AND_FAMILY';
    case LATIN_MUSIC = 'LATIN_MUSIC';
    case LEISURE = 'LEISURE';
    case MISCELLANEOUS = 'MISCELLANEOUS';
    case MUSIC = 'MUSIC';
    case MUSICAL = 'MUSICAL';
    case MUSICALS_CABARET = 'MUSICALS_CABARET';
    case MYSTERY = 'MYSTERY';
    case NEWS = 'NEWS';
    case NEW_AGE = 'NEW_AGE';
    case OLDIES_ADULT_STANDARDS = 'OLDIES_ADULT_STANDARDS';
    case POP = 'POP';
    case RAP_HIP_HOP = 'RAP_HIP_HOP';
    case RB = 'RB';
    case REALITY_TV = 'REALITY_TV';
    case REGGAE_ISLAND = 'REGGAE_ISLAND';
    case RELIGION_AND_SPIRITUALITY = 'RELIGION_AND_SPIRITUALITY';
    case ROCK = 'ROCK';
    case ROMANCE = 'ROMANCE';
    case SCIENCE = 'SCIENCE';
    case SCIENCE_FICTION = 'SCIENCE_FICTION';
    case SHORT = 'SHORT';
    case SOCIETY_AND_CULTURE = 'SOCIETY_AND_CULTURE';
    case SOUNDTRACKS = 'SOUNDTRACKS';
    case SPORT = 'SPORT';
    case SUPER_HERO = 'SUPER_HERO';
    case TALK_SHOW = 'TALK_SHOW';
    case TECHNOLOGY = 'TECHNOLOGY';
    case THRILLER = 'THRILLER';
    case TRUE_CRIME = 'TRUE_CRIME';
    case TV_AND_FILM = 'TV_AND_FILM';
    case WAR = 'WAR';
    case WESTERN = 'WESTERN';

    /**
     * Returns every serialized OpenAPI enum value.
     *
     * @return list<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
