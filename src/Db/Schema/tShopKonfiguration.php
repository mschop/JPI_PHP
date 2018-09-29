<?php

namespace App\Db\Schema;

class tShopKonfiguration
{
	const TABLE_NAME = 'tShopKonfiguration';
	const kShop = 'kShop';
	const nImport = 'nImport';
	const nImportArtikelKategorien = 'nImportArtikelKategorien';
	const nImportBestellungenKunden = 'nImportBestellungenKunden';
	const nUpload = 'nUpload';
	const nUploadArtikelKomplett = 'nUploadArtikelKomplett';
	const nUploadArtikelPreise = 'nUploadArtikelPreise';
	const nUploadArtikelBestand = 'nUploadArtikelBestand';
	const nUploadKundendaten = 'nUploadKundendaten';
	const nUploadBilder = 'nUploadBilder';
	const nArtikelMergen = 'nArtikelMergen';
	const nBilderLoeschen = 'nBilderLoeschen';
	const nMaxMB = 'nMaxMB';
	const nMaxBilder = 'nMaxBilder';
	const nMaxArtikel = 'nMaxArtikel';
	const nHerstellerGefiltertSenden = 'nHerstellerGefiltertSenden';
	const nImportBilder = 'nImportBilder';
	const nMaxPull = 'nMaxPull';
	const nSteuerDurchWawiBerechnen = 'nSteuerDurchWawiBerechnen';
	const COLUMN_NAMES = [
		'kShop',
		'nImport',
		'nImportArtikelKategorien',
		'nImportBestellungenKunden',
		'nUpload',
		'nUploadArtikelKomplett',
		'nUploadArtikelPreise',
		'nUploadArtikelBestand',
		'nUploadKundendaten',
		'nUploadBilder',
		'nArtikelMergen',
		'nBilderLoeschen',
		'nMaxMB',
		'nMaxBilder',
		'nMaxArtikel',
		'nHerstellerGefiltertSenden',
		'nImportBilder',
		'nMaxPull',
		'nSteuerDurchWawiBerechnen',
	];
	const COLUMN_DEFINITIONS = [
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nImport' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nImportArtikelKategorien' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nImportBestellungenKunden' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUpload' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUploadArtikelKomplett' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUploadArtikelPreise' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUploadArtikelBestand' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUploadKundendaten' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUploadBilder' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtikelMergen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBilderLoeschen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMaxMB' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMaxBilder' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMaxArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nHerstellerGefiltertSenden' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nImportBilder' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMaxPull' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSteuerDurchWawiBerechnen' => [
			'type' => 'bit',
			'phpType' => 'boolean',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kShop */
	public $kShop;

	/** @var int nImport */
	public $nImport;

	/** @var int nImportArtikelKategorien */
	public $nImportArtikelKategorien;

	/** @var int nImportBestellungenKunden */
	public $nImportBestellungenKunden;

	/** @var int nUpload */
	public $nUpload;

	/** @var int nUploadArtikelKomplett */
	public $nUploadArtikelKomplett;

	/** @var int nUploadArtikelPreise */
	public $nUploadArtikelPreise;

	/** @var int nUploadArtikelBestand */
	public $nUploadArtikelBestand;

	/** @var int nUploadKundendaten */
	public $nUploadKundendaten;

	/** @var int nUploadBilder */
	public $nUploadBilder;

	/** @var int nArtikelMergen */
	public $nArtikelMergen;

	/** @var int nBilderLoeschen */
	public $nBilderLoeschen;

	/** @var string nMaxMB */
	public $nMaxMB;

	/** @var int nMaxBilder */
	public $nMaxBilder;

	/** @var int nMaxArtikel */
	public $nMaxArtikel;

	/** @var int nHerstellerGefiltertSenden */
	public $nHerstellerGefiltertSenden;

	/** @var int nImportBilder */
	public $nImportBilder;

	/** @var int nMaxPull */
	public $nMaxPull;

	/** @var boolean nSteuerDurchWawiBerechnen */
	public $nSteuerDurchWawiBerechnen;
}
