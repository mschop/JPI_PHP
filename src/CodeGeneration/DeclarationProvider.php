<?php

namespace App\CodeGeneration;


use App\Db\Schema\tArtikel;
use App\Db\Schema\tArtikelAbnahme;
use App\Db\Schema\tArtikelAttribut;
use App\Db\Schema\tArtikelAttributSprache;
use App\Db\Schema\tArtikelBeschreibung;
use App\Db\Schema\tAttribut;
use App\Db\Schema\tAttributShop;
use App\Db\Schema\tAttributSprache;
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

    const REL_TYPE_TO_ONE = 0;
    const REL_TYPE_TO_MANY = 1;

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
            ],
            tAttribut::class => [
                static::DEF_TARGET_CLASS => 'Attribute',
                static::DEF_FIELDS => [
                    tAttribut::kAttribut => 'id',
                    tAttribut::nIstMehrsprachig => [static::DEF_COLUMN_NAME => 'isMultilingual', static::DEF_TRANSITIONS => Transition::BOOL_BIT],
                    tAttribut::nSortierung => 'sort',
                    tAttribut::cBeschreibung => 'description',
                    tAttribut::nAusgabeweg => 'outputType',
                    tAttribut::nIstStandard => [static::DEF_COLUMN_NAME => 'isDefault', static::DEF_TRANSITIONS => Transition::BOOL_BIT],
                    tAttribut::kFeldTyp => 'fieldTypeId',
                    tAttribut::cRegEx => 'regex',
                    tAttribut::cGruppeName => 'groupName',
                    tAttribut::nReadOnly => [static::DEF_COLUMN_NAME => 'isReadOnly', static::DEF_TRANSITIONS => Transition::BOOL_BIT]
                ]
            ],
            tAttributSprache::class => [
                static::DEF_TARGET_CLASS => 'AttributeTranslation',
                static::DEF_FIELDS => [
                    tAttributSprache::kSprache => 'languageId',
                    tAttributSprache::cName => 'name',
                    tAttributSprache::cWertListe => [static::DEF_COLUMN_NAME => 'valueList', static::DEF_TRANSITIONS => Transition::VALUE_LIST_PIPE],
                ]
            ],
            tAttributShop::class => [
                static::DEF_TARGET_CLASS => 'AttributeShop',
                static::DEF_FIELDS => [
                    tAttributShop::kShop => 'shopId'
                ]
            ],
            tArtikelAttribut::class => [
                static::DEF_TARGET_CLASS => 'ProductAttribute',
                static::DEF_FIELDS => [
                    tArtikelAttribut::kArtikelAttribut => 'id',
                    tArtikelAttribut::kAttribut => 'attributeId',
                    tArtikelAttribut::kShop => 'shopId',
                    tArtikelAttribut::kArtikel => 'productId',
                ]
            ],
            tArtikelAttributSprache::class => [
                static::DEF_TARGET_CLASS => 'ProductAttributeTranslation',
                static::DEF_FIELDS => [
                    tArtikelAttributSprache::kArtikelAttribut => 'productAttributeId',
                    tArtikelAttributSprache::kSprache => 'languageId',
                    tArtikelAttributSprache::cWertVarchar => 'stringValue',
                    tArtikelAttributSprache::dWertDateTime => 'dateValue',
                    tArtikelAttributSprache::fWertDecimal => 'decimalValue',
                    tArtikelAttributSprache::nWertInt => 'intValue',
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
                    static::REL_TYPE => static::REL_TYPE_TO_MANY,
                ],
                [
                    static::REL_ENTITY => 'ProductBuyInterval',
                    static::REL_COLUMN => 'buyIntervals',
                    static::REL_TYPE => static::REL_TYPE_TO_MANY
                ],
                [
                    static::REL_ENTITY => 'ProductAttribute',
                    static::REL_COLUMN => 'attributes',
                    static::REL_TYPE => static::REL_TYPE_TO_MANY
                ]
            ],
            'Attribute' => [
                [
                    static::REL_ENTITY => 'AttributeTranslation',
                    static::REL_COLUMN => 'translations',
                    static::REL_TYPE => static::REL_TYPE_TO_MANY
                ],
                [
                    static::REL_ENTITY => 'AttributeShop',
                    static::REL_COLUMN => 'shops',
                    static::REL_TYPE => static::REL_TYPE_TO_MANY
                ]
            ],
            'ProductAttribute' => [
                [
                    static::REL_ENTITY => 'ProductAttributeTranslation',
                    static::REL_COLUMN => 'translations',
                    static::REL_TYPE => static::REL_TYPE_TO_MANY
                ],
                [
                    static::REL_ENTITY => 'Attribute',
                    static::REL_COLUMN => 'attribute',
                    static::REL_TYPE => static::REL_TYPE_TO_ONE
                ]
            ]
        ];
    }
}