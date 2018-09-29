<?php

namespace App\Db\Schema;

class pf_amazon_angebot_ext
{
	const TABLE_NAME = 'pf_amazon_angebot_ext';
	const cSellerSKU = 'cSellerSKU';
	const kUser = 'kUser';
	const fPreis = 'fPreis';
	const nMaxBestand = 'nMaxBestand';
	const fVersandkosten = 'fVersandkosten';
	const nDelete = 'nDelete';
	const fAPAMinPreis = 'fAPAMinPreis';
	const fAPAMaxPreis = 'fAPAMaxPreis';
	const fAPAPreisabstand = 'fAPAPreisabstand';
	const nIstAPAPreisabstandProzentual = 'nIstAPAPreisabstandProzentual';
	const nAPAUpdate = 'nAPAUpdate';
	const dLetztePreisAenderung = 'dLetztePreisAenderung';
	const dLetzteBestandAenderung = 'dLetzteBestandAenderung';
	const dLetzteVersandAenderung = 'dLetzteVersandAenderung';
	const dLetztesAPAUpdate = 'dLetztesAPAUpdate';
	const dRestockDate = 'dRestockDate';
	const nBearbeitungsZeit = 'nBearbeitungsZeit';
	const cFulfillmentChannel = 'cFulfillmentChannel';
	const dSaleStart = 'dSaleStart';
	const dSaleEnd = 'dSaleEnd';
	const fSalePrice = 'fSalePrice';
	const nAPANutzen = 'nAPANutzen';
	const cNameSeller1 = 'cNameSeller1';
	const fPreisSeller1 = 'fPreisSeller1';
	const fVersandSeller1 = 'fVersandSeller1';
	const nVerkaufsrang = 'nVerkaufsrang';
	const dSellerdaten = 'dSellerdaten';
	const nPlattform = 'nPlattform';
	const cConditionNote = 'cConditionNote';
	const nConditionNoteChanged = 'nConditionNoteChanged';
	const nAPAPruefIntervall = 'nAPAPruefIntervall';
	const nAPAShippingTime = 'nAPAShippingTime';
	const nAPASellerPositiveFeedbackRating = 'nAPASellerPositiveFeedbackRating';
	const fAPAPreisabstandFBA = 'fAPAPreisabstandFBA';
	const nIstAPAPreisabstandFBAProzentual = 'nIstAPAPreisabstandFBAProzentual';
	const nUseAPAGlobal = 'nUseAPAGlobal';
	const dLetzteBearbeitungszeitAenderung = 'dLetzteBearbeitungszeitAenderung';
	const kSteuercode = 'kSteuercode';
	const dLetzteTaxShippingAenderung = 'dLetzteTaxShippingAenderung';
	const cMerchantShippingGroupName = 'cMerchantShippingGroupName';
	const nB2BPreiseSenden = 'nB2BPreiseSenden';
	const nSwitchFulfillmentTo = 'nSwitchFulfillmentTo';
	const dLastSwitchFulfillmentTo = 'dLastSwitchFulfillmentTo';
	const nLetzteBearbeitungsZeit = 'nLetzteBearbeitungsZeit';
	const kAmazonVersandgruppe = 'kAmazonVersandgruppe';
	const COLUMN_NAMES = [
		'cSellerSKU',
		'kUser',
		'fPreis',
		'nMaxBestand',
		'fVersandkosten',
		'nDelete',
		'fAPAMinPreis',
		'fAPAMaxPreis',
		'fAPAPreisabstand',
		'nIstAPAPreisabstandProzentual',
		'nAPAUpdate',
		'dLetztePreisAenderung',
		'dLetzteBestandAenderung',
		'dLetzteVersandAenderung',
		'dLetztesAPAUpdate',
		'dRestockDate',
		'nBearbeitungsZeit',
		'cFulfillmentChannel',
		'dSaleStart',
		'dSaleEnd',
		'fSalePrice',
		'nAPANutzen',
		'cNameSeller1',
		'fPreisSeller1',
		'fVersandSeller1',
		'nVerkaufsrang',
		'dSellerdaten',
		'nPlattform',
		'cConditionNote',
		'nConditionNoteChanged',
		'nAPAPruefIntervall',
		'nAPAShippingTime',
		'nAPASellerPositiveFeedbackRating',
		'fAPAPreisabstandFBA',
		'nIstAPAPreisabstandFBAProzentual',
		'nUseAPAGlobal',
		'dLetzteBearbeitungszeitAenderung',
		'kSteuercode',
		'dLetzteTaxShippingAenderung',
		'cMerchantShippingGroupName',
		'nB2BPreiseSenden',
		'nSwitchFulfillmentTo',
		'dLastSwitchFulfillmentTo',
		'nLetzteBearbeitungsZeit',
		'kAmazonVersandgruppe',
	];
	const COLUMN_DEFINITIONS = [
		'cSellerSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMaxBestand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVersandkosten' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDelete' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAPAMinPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAPAMaxPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAPAPreisabstand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstAPAPreisabstandProzentual' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAPAUpdate' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLetztePreisAenderung' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLetzteBestandAenderung' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLetzteVersandAenderung' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLetztesAPAUpdate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dRestockDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBearbeitungsZeit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFulfillmentChannel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'dSaleStart' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dSaleEnd' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fSalePrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAPANutzen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cNameSeller1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fPreisSeller1' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVersandSeller1' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVerkaufsrang' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dSellerdaten' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cConditionNote' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'nConditionNoteChanged' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAPAPruefIntervall' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAPAShippingTime' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAPASellerPositiveFeedbackRating' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAPAPreisabstandFBA' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstAPAPreisabstandFBAProzentual' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUseAPAGlobal' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLetzteBearbeitungszeitAenderung' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSteuercode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLetzteTaxShippingAenderung' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMerchantShippingGroupName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nB2BPreiseSenden' => [
			'type' => 'bit',
			'phpType' => 'boolean',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSwitchFulfillmentTo' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLastSwitchFulfillmentTo' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLetzteBearbeitungsZeit' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAmazonVersandgruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int kUser */
	public $kUser;

	/** @var string fPreis */
	public $fPreis;

	/** @var int nMaxBestand */
	public $nMaxBestand;

	/** @var string fVersandkosten */
	public $fVersandkosten;

	/** @var int nDelete */
	public $nDelete;

	/** @var string fAPAMinPreis */
	public $fAPAMinPreis;

	/** @var string fAPAMaxPreis */
	public $fAPAMaxPreis;

	/** @var string fAPAPreisabstand */
	public $fAPAPreisabstand;

	/** @var int nIstAPAPreisabstandProzentual */
	public $nIstAPAPreisabstandProzentual;

	/** @var int nAPAUpdate */
	public $nAPAUpdate;

	/** @var string dLetztePreisAenderung */
	public $dLetztePreisAenderung;

	/** @var string dLetzteBestandAenderung */
	public $dLetzteBestandAenderung;

	/** @var string dLetzteVersandAenderung */
	public $dLetzteVersandAenderung;

	/** @var string dLetztesAPAUpdate */
	public $dLetztesAPAUpdate;

	/** @var string dRestockDate */
	public $dRestockDate;

	/** @var int nBearbeitungsZeit */
	public $nBearbeitungsZeit;

	/** @var string cFulfillmentChannel */
	public $cFulfillmentChannel;

	/** @var string dSaleStart */
	public $dSaleStart;

	/** @var string dSaleEnd */
	public $dSaleEnd;

	/** @var string fSalePrice */
	public $fSalePrice;

	/** @var int nAPANutzen */
	public $nAPANutzen;

	/** @var string cNameSeller1 */
	public $cNameSeller1;

	/** @var string fPreisSeller1 */
	public $fPreisSeller1;

	/** @var string fVersandSeller1 */
	public $fVersandSeller1;

	/** @var int nVerkaufsrang */
	public $nVerkaufsrang;

	/** @var string dSellerdaten */
	public $dSellerdaten;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var string cConditionNote */
	public $cConditionNote;

	/** @var int nConditionNoteChanged */
	public $nConditionNoteChanged;

	/** @var int nAPAPruefIntervall */
	public $nAPAPruefIntervall;

	/** @var int nAPAShippingTime */
	public $nAPAShippingTime;

	/** @var int nAPASellerPositiveFeedbackRating */
	public $nAPASellerPositiveFeedbackRating;

	/** @var string fAPAPreisabstandFBA */
	public $fAPAPreisabstandFBA;

	/** @var int nIstAPAPreisabstandFBAProzentual */
	public $nIstAPAPreisabstandFBAProzentual;

	/** @var int nUseAPAGlobal */
	public $nUseAPAGlobal;

	/** @var string dLetzteBearbeitungszeitAenderung */
	public $dLetzteBearbeitungszeitAenderung;

	/** @var int kSteuercode */
	public $kSteuercode;

	/** @var string dLetzteTaxShippingAenderung */
	public $dLetzteTaxShippingAenderung;

	/** @var string cMerchantShippingGroupName */
	public $cMerchantShippingGroupName;

	/** @var boolean nB2BPreiseSenden */
	public $nB2BPreiseSenden;

	/** @var int nSwitchFulfillmentTo */
	public $nSwitchFulfillmentTo;

	/** @var string dLastSwitchFulfillmentTo */
	public $dLastSwitchFulfillmentTo;

	/** @var int nLetzteBearbeitungsZeit */
	public $nLetzteBearbeitungsZeit;

	/** @var int kAmazonVersandgruppe */
	public $kAmazonVersandgruppe;
}
