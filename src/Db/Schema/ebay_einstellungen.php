<?php

namespace App\Db\Schema;

class ebay_einstellungen
{
	const TABLE_NAME = 'ebay_einstellungen';
	const kEbayEinstellungen = 'kEbayEinstellungen';
	const nCheckout = 'nCheckout';
	const nVEAN = 'nVEAN';
	const nVISBN = 'nVISBN';
	const nVUPC = 'nVUPC';
	const nVEPID = 'nVEPID';
	const nVHAN = 'nVHAN';
	const nArtnamenutzen = 'nArtnamenutzen';
	const nUsePremium = 'nUsePremium';
	const nUseGalleryPlus = 'nUseGalleryPlus';
	const nVersandartPraefixVerwenden = 'nVersandartPraefixVerwenden';
	const nNichtLaufendeLoeschen = 'nNichtLaufendeLoeschen';
	const cAuftraegeAusgabeweg = 'cAuftraegeAusgabeweg';
	const COLUMN_NAMES = [
		'kEbayEinstellungen',
		'nCheckout',
		'nVEAN',
		'nVISBN',
		'nVUPC',
		'nVEPID',
		'nVHAN',
		'nArtnamenutzen',
		'nUsePremium',
		'nUseGalleryPlus',
		'nVersandartPraefixVerwenden',
		'nNichtLaufendeLoeschen',
		'cAuftraegeAusgabeweg',
	];
	const COLUMN_DEFINITIONS = [
		'kEbayEinstellungen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nCheckout' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVEAN' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVISBN' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVUPC' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVEPID' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVHAN' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtnamenutzen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUsePremium' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUseGalleryPlus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersandartPraefixVerwenden' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nNichtLaufendeLoeschen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAuftraegeAusgabeweg' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEbayEinstellungen */
	public $kEbayEinstellungen;

	/** @var int nCheckout */
	public $nCheckout;

	/** @var int nVEAN */
	public $nVEAN;

	/** @var int nVISBN */
	public $nVISBN;

	/** @var int nVUPC */
	public $nVUPC;

	/** @var int nVEPID */
	public $nVEPID;

	/** @var int nVHAN */
	public $nVHAN;

	/** @var int nArtnamenutzen */
	public $nArtnamenutzen;

	/** @var int nUsePremium */
	public $nUsePremium;

	/** @var int nUseGalleryPlus */
	public $nUseGalleryPlus;

	/** @var int nVersandartPraefixVerwenden */
	public $nVersandartPraefixVerwenden;

	/** @var int nNichtLaufendeLoeschen */
	public $nNichtLaufendeLoeschen;

	/** @var string cAuftraegeAusgabeweg */
	public $cAuftraegeAusgabeweg;
}
