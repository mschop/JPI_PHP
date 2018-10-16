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
use App\Db\Schema\tBestellung;
use App\Db\Schema\tlieferadresse;
use App\Db\Schema\tMandant;
use App\Db\Schema\trechnungsadresse;

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
            ],
            tBestellung::class => [
                static::DEF_TARGET_CLASS => 'Order',
                static::DEF_FIELDS => [
                    tBestellung::kBestellung => 'id',
                    tBestellung::tRechnung_kRechnung => 'invoiceId',
                    tBestellung::tBenutzer_kBenutzer => 'userId',
                    tBestellung::cBestellNr => 'orderNumber',
                    tBestellung::cType => 'type',
                    tBestellung::cAnmerkung => 'annotation',
                    tBestellung::dErstellt => 'createdAt',
                    tBestellung::nZahlungsziel => 'dayTerm',
                    tBestellung::tVersandArt_kVersandArt => 'deliveryTypeId',
                    tBestellung::fVersandBruttoPreis => 'grossDeliveryCosts',
                    tBestellung::fRabatt => 'discount',
                    tBestellung::cVersandInfo => 'deliveryInfo',
                    tBestellung::dVersandt => 'releasedForDeliveryAt',
                    tBestellung::cIdentCode => 'identCode',
                    tBestellung::cBeschreibung => 'description',
                    tBestellung::cInet => 'inet',
                    tBestellung::dLieferdatum => 'deliveredAt',
                    tBestellung::kBestellHinweis => 'orderHint',
                    tBestellung::cErloeskonto => 'accountOfProceeds',
                    tBestellung::cWaehrung => 'currency',
                    tBestellung::fFaktor => 'currencyFactor',
                    tBestellung::kShop => 'shopId',
                    tBestellung::kFirma => 'companyId',
                    tBestellung::kLogistik => 'logisticianId',
                    tBestellung::nPlatform => 'platform',
                    tBestellung::kSprache => 'languageId',
                    tBestellung::fGutschein => 'voucherValue',
                    tBestellung::dGedruckt => 'printedAt',
                    tBestellung::dMailVersandt => 'mailedAt',
                    tBestellung::cInetBestellNr => 'inetOrderNumber',
                    tBestellung::kZahlungsArt => 'paymentMethodId',
                    tBestellung::nIGL => [static::DEF_COLUMN_NAME => 'isIgl', static::DEF_TRANSITIONS => Transition::BOOL_BIT],
                    tBestellung::nUStFrei => [static::DEF_COLUMN_NAME => 'isVatExempt', static::DEF_TRANSITIONS => Transition::BOOL_BIT],
                    tBestellung::cStatus => 'status',
                    tBestellung::dVersandMail => 'deliveryMailSentAt',
                    tBestellung::dZahlungsMail => 'paymentMailSentAt',
                    tBestellung::cUserName => 'userName',
                    tBestellung::cVerwendungszweck => 'paymentReferenceLine',
                    tBestellung::fSkonto => 'earlyPaymentDiscount',
                    tBestellung::nStorno => 'isCancelled',
                    tBestellung::cModulID => 'moduleId',
                    tBestellung::nZahlungsTyp => 'paymentType',
                    tBestellung::nHatUpload => 'hasUpload',
                    tBestellung::fZusatzGewicht => 'additionalWeight',
                    tBestellung::nKomplettAusgeliefert => [static::DEF_COLUMN_NAME => 'isDeliveredCompletely', static::DEF_TRANSITIONS => Transition::BOOL_BIT],
                    tBestellung::dBezahlt => 'payedAt',
                    tBestellung::kSplitBestellung => 'splitOrderId',
                    tBestellung::nPrio => 'priority',
                    tBestellung::cVersandlandISO => 'deliveryCountryIsoCode',
                    tBestellung::cUstId => 'vatNumber',
                    tBestellung::nPremium => [static::DEF_COLUMN_NAME => 'isPremium', static::DEF_TRANSITIONS => Transition::BOOL_BIT],
                    tBestellung::cVersandlandWaehrung => 'deliveryCountryCurrency',
                    tBestellung::fVersandlandWaehrungFaktor => 'deliveryCountryCurrencyFactor',
                    tBestellung::cKundenauftragsnummer => 'customerOrderNumber',
                    tBestellung::nIstExterneRechnung => [static::DEF_COLUMN_NAME => 'isExtenalInvoice', static::DEF_TRANSITIONS => Transition::BOOL_BIT],
                    tBestellung::cKampagne => 'campaign',
                    tBestellung::cKampagneParam => 'campaignParam',
                    tBestellung::cKampagneName => 'campaignName',
                    tBestellung::cUserAgent => 'userAgent',
                    tBestellung::cReferrer => 'referrer',
                    tBestellung::nMaxLiefertage => 'maxDeliveryDays',
                ]
            ],
            tlieferadresse::class => [
                static::DEF_TARGET_CLASS => 'DeliveryAddress',
                static::DEF_FIELDS => [
                    tlieferadresse::kLieferAdresse => 'id',
                    tlieferadresse::kKunde => 'customerId',
                    tlieferadresse::kKunde => 'customerId',
                    tlieferadresse::cFirma => 'company',
                    tlieferadresse::cAnrede => 'salutation',
                    tlieferadresse::cTitel => 'title',
                    tlieferadresse::cVorname => 'firstName',
                    tlieferadresse::cName => 'name',
                    tlieferadresse::cStrasse => 'street',
                    tlieferadresse::cPLZ => 'postcode',
                    tlieferadresse::cOrt => 'city',
                    tlieferadresse::cLand => 'country',
                    tlieferadresse::cTel => 'phone',
                    tlieferadresse::cZusatz => 'addition',
                    tlieferadresse::cAdressZusatz => 'addressAddition',
                    tlieferadresse::cPostID => 'postId',
                    tlieferadresse::cMobil => 'mobile',
                    tlieferadresse::cMail => 'mail',
                    tlieferadresse::cFax => 'fax',
                    tlieferadresse::cBundesland => 'state',
                    tlieferadresse::cISO => 'countryIsoCode',
                ]
            ],
            trechnungsadresse::class => [
                static::DEF_TARGET_CLASS => 'InvoiceAddress',
                static::DEF_FIELDS => [
                    trechnungsadresse::kRechnungsAdresse => 'id',
                    trechnungsadresse::kKunde => 'customerId',
                    trechnungsadresse::cFirma => 'company',
                    trechnungsadresse::cAnrede => 'salutation',
                    trechnungsadresse::cTitel => 'title',
                    trechnungsadresse::cVorname => 'firstName',
                    trechnungsadresse::cName => 'name',
                    trechnungsadresse::cStrasse => 'street',
                    trechnungsadresse::cPLZ => 'postcode',
                    trechnungsadresse::cOrt => 'city',
                    trechnungsadresse::cLand => 'country',
                    trechnungsadresse::cTel => 'phone',
                    trechnungsadresse::cZusatz => 'addition',
                    trechnungsadresse::cAdressZusatz => 'addressAddition',
                    trechnungsadresse::cPostID => 'postId',
                    trechnungsadresse::cMobil => 'mobile',
                    trechnungsadresse::cMail => 'mail',
                    trechnungsadresse::cFax => 'fax',
                    trechnungsadresse::cBundesland => 'state',
                    trechnungsadresse::cISO => 'countryIsoCode',
                    trechnungsadresse::cKundenNr => 'customerNumber',
                    trechnungsadresse::cZHaenden => 'attention',
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
            ],
            'Order' => [
                [
                    static::REL_ENTITY => 'InvoiceAddress',
                    static::REL_COLUMN => 'invoiceAddress',
                    static::REL_TYPE => static::REL_TYPE_TO_ONE,
                ],
                [
                    static::REL_ENTITY => 'DeliveryAddress',
                    static::REL_COLUMN => 'deliveryAddress',
                    static::REL_TYPE => static::REL_TYPE_TO_ONE,
                ]
            ]
        ];
    }
}