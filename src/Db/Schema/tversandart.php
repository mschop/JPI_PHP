<?php

namespace App\Db\Schema;

class tversandart
{
	const TABLE_NAME = 'tversandart';
	const kVersandArt = 'kVersandArt';
	const cName = 'cName';
	const fPrice = 'fPrice';
	const cAktiv = 'cAktiv';
	const cInet = 'cInet';
	const cZahlungsInfo = 'cZahlungsInfo';
	const fMwSt = 'fMwSt';
	const cDruckText = 'cDruckText';
	const fVKFreiAB = 'fVKFreiAB';
	const cAuftragsText = 'cAuftragsText';
	const fZusatzGewicht = 'fZusatzGewicht';
	const nEigeneVersandart = 'nEigeneVersandart';
	const kMainVersandart = 'kMainVersandart';
	const nVerwiegePflicht = 'nVerwiegePflicht';
	const nTrackingIDEingabePflicht = 'nTrackingIDEingabePflicht';
	const nExpress = 'nExpress';
	const cTrackingIDRegex = 'cTrackingIDRegex';
	const nTrackingIDVon = 'nTrackingIDVon';
	const nTrackingIDBis = 'nTrackingIDBis';
	const nPrioritaet = 'nPrioritaet';
	const nEtikettenDrucken = 'nEtikettenDrucken';
	const nEtikettenStartRueckfrage = 'nEtikettenStartRueckfrage';
	const kEtikettenFormular = 'kEtikettenFormular';
	const nVersandMailSenden = 'nVersandMailSenden';
	const nVersandSchnittstelle = 'nVersandSchnittstelle';
	const cTrackingUrlTemplate = 'cTrackingUrlTemplate';
	const cAmazonCarrierCode = 'cAmazonCarrierCode';
	const cEbayCarrierCode = 'cEbayCarrierCode';
	const kVersanddatenImportVorlage = 'kVersanddatenImportVorlage';
	const kVersanddatenExportVorlage = 'kVersanddatenExportVorlage';
	const nVersanddienstleister = 'nVersanddienstleister';
	const nAmazonPrime = 'nAmazonPrime';
	const COLUMN_NAMES = [
		'kVersandArt',
		'cName',
		'fPrice',
		'cAktiv',
		'cInet',
		'cZahlungsInfo',
		'fMwSt',
		'cDruckText',
		'fVKFreiAB',
		'cAuftragsText',
		'fZusatzGewicht',
		'nEigeneVersandart',
		'kMainVersandart',
		'nVerwiegePflicht',
		'nTrackingIDEingabePflicht',
		'nExpress',
		'cTrackingIDRegex',
		'nTrackingIDVon',
		'nTrackingIDBis',
		'nPrioritaet',
		'nEtikettenDrucken',
		'nEtikettenStartRueckfrage',
		'kEtikettenFormular',
		'nVersandMailSenden',
		'nVersandSchnittstelle',
		'cTrackingUrlTemplate',
		'cAmazonCarrierCode',
		'cEbayCarrierCode',
		'kVersanddatenImportVorlage',
		'kVersanddatenExportVorlage',
		'nVersanddienstleister',
		'nAmazonPrime',
	];
	const COLUMN_DEFINITIONS = [
		'kVersandArt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cZahlungsInfo' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'fMwSt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDruckText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fVKFreiAB' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAuftragsText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fZusatzGewicht' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEigeneVersandart' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMainVersandart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVerwiegePflicht' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTrackingIDEingabePflicht' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nExpress' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTrackingIDRegex' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'nTrackingIDVon' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTrackingIDBis' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPrioritaet' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEtikettenDrucken' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEtikettenStartRueckfrage' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEtikettenFormular' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersandMailSenden' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersandSchnittstelle' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTrackingUrlTemplate' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAmazonCarrierCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cEbayCarrierCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kVersanddatenImportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersanddatenExportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersanddienstleister' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAmazonPrime' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kVersandArt */
	public $kVersandArt;

	/** @var string cName */
	public $cName;

	/** @var string fPrice */
	public $fPrice;

	/** @var string cAktiv */
	public $cAktiv;

	/** @var string cInet */
	public $cInet;

	/** @var string cZahlungsInfo */
	public $cZahlungsInfo;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string cDruckText */
	public $cDruckText;

	/** @var string fVKFreiAB */
	public $fVKFreiAB;

	/** @var string cAuftragsText */
	public $cAuftragsText;

	/** @var string fZusatzGewicht */
	public $fZusatzGewicht;

	/** @var int nEigeneVersandart */
	public $nEigeneVersandart;

	/** @var int kMainVersandart */
	public $kMainVersandart;

	/** @var int nVerwiegePflicht */
	public $nVerwiegePflicht;

	/** @var int nTrackingIDEingabePflicht */
	public $nTrackingIDEingabePflicht;

	/** @var int nExpress */
	public $nExpress;

	/** @var string cTrackingIDRegex */
	public $cTrackingIDRegex;

	/** @var int nTrackingIDVon */
	public $nTrackingIDVon;

	/** @var int nTrackingIDBis */
	public $nTrackingIDBis;

	/** @var int nPrioritaet */
	public $nPrioritaet;

	/** @var int nEtikettenDrucken */
	public $nEtikettenDrucken;

	/** @var int nEtikettenStartRueckfrage */
	public $nEtikettenStartRueckfrage;

	/** @var int kEtikettenFormular */
	public $kEtikettenFormular;

	/** @var int nVersandMailSenden */
	public $nVersandMailSenden;

	/** @var int nVersandSchnittstelle */
	public $nVersandSchnittstelle;

	/** @var string cTrackingUrlTemplate */
	public $cTrackingUrlTemplate;

	/** @var string cAmazonCarrierCode */
	public $cAmazonCarrierCode;

	/** @var string cEbayCarrierCode */
	public $cEbayCarrierCode;

	/** @var int kVersanddatenImportVorlage */
	public $kVersanddatenImportVorlage;

	/** @var int kVersanddatenExportVorlage */
	public $kVersanddatenExportVorlage;

	/** @var int nVersanddienstleister */
	public $nVersanddienstleister;

	/** @var int nAmazonPrime */
	public $nAmazonPrime;
}
