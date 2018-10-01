<?php

namespace App\CodeGeneration;


use App\Db\Schema\tArtikel;
use App\Db\Schema\tArtikelAbnahme;
use App\Db\Schema\tArtikelBeschreibung;
use App\Db\Schema\tMandant;

class DeclarationProvider
{
    const DEF_TARGET_CLASS = 0;
    const DEF_FIELDS = 1;
    const DEF_TRANSITIONS = 2;
    const DEF_COLUMN_NAME = 3;

    const REL_ENTITY = 0;
    const REL_COLUMN = 1;
    const REL_TYPE = 2;

    const REL_TYPE_ONE_TO_ONE = 0;
    const REL_TYPE_ONE_TO_MANY = 1;

    /**
     * Creates the declaration. This cannot be a const because this causes the symfony container to fail on checking
     * this file.
     *
     * @return array
     */
    public function getDeclaration()
    {
        return [
            tMandant::class => [
                static::DEF_TARGET_CLASS => 'Tenant',
                static::DEF_FIELDS => [
                    tMandant::kMandant => 'id',
                    tMandant::cName => 'name',
                    tMandant::cDB => 'dbName'
                ]
            ],
            tArtikel::class => [
                static::DEF_TARGET_CLASS => 'Product',
                static::DEF_FIELDS => [
                    tArtikel::kArtikel => 'id',
                    tArtikel::cArtNr => 'sku',
                    tArtikel::fVKNetto => 'netPrice',
                    tArtikel::fUVP => 'rrp',
                    tArtikel::cAnmerkung => 'note',
                    tArtikel::cPreisliste => [static::DEF_COLUMN_NAME => 'isPriceList', static::DEF_TRANSITIONS => Transition::BOOL_YN],
                    tArtikel::cAktiv => [static::DEF_COLUMN_NAME => 'isActive', static::DEF_TRANSITIONS => Transition::BOOL_YN],
                    tArtikel::nLagerbestand => 'stock',
                    tArtikel::nMindestbestellmaenge => 'minOrderAmount',
                    tArtikel::cBarcode => 'gtin',
                ]
            ],
            tArtikelAbnahme::class => [
                static::DEF_TARGET_CLASS => 'ProductBuyInterval',
                static::DEF_FIELDS => [
                    tArtikelAbnahme::kKundengruppe => 'customerGroupId',
                    tArtikelAbnahme::fIntervall => 'interval',
                    tArtikelAbnahme::fMindestabnahme => 'minBuyAmount',
                ]
            ],
            tArtikelBeschreibung::class => [
                static::DEF_TARGET_CLASS => 'ProductDescription',
                static::DEF_FIELDS => [
                    tArtikelBeschreibung::kSprache => 'languageId',
                    tArtikelBeschreibung::kPlattform => 'platformId',
                    tArtikelBeschreibung::kShop => 'shopId',
                    tArtikelBeschreibung::cName => 'name',
                    tArtikelBeschreibung::cBeschreibung => 'description',
                    tArtikelBeschreibung::cKurzBeschreibung => 'shopDescription',
                    tArtikelBeschreibung::cUrlPfad => 'urlPath',
                    tArtikelBeschreibung::cMetaDescription => 'metaDescription',
                    tArtikelBeschreibung::cTitleTag => 'metaTitle',
                    tArtikelBeschreibung::cMetaKeywords => 'metaKeywords',
                ]
            ]
        ];
    }

    public function getRelations()
    {
        return [
            'Product' => [
                [
                    static::REL_ENTITY => 'ProductDescription',
                    static::REL_COLUMN => 'descriptions',
                    static::REL_TYPE => static::REL_TYPE_ONE_TO_MANY,
                ],
                [
                    static::REL_ENTITY => 'ProductBuyInterval',
                    static::REL_COLUMN => 'buyIntervals',
                    static::REL_TYPE => static::REL_TYPE_ONE_TO_MANY
                ]
            ]
        ];
    }
}