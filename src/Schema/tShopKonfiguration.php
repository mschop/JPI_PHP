<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kShop' => 'int',
		'nImport' => 'tinyint',
		'nImportArtikelKategorien' => 'tinyint',
		'nImportBestellungenKunden' => 'tinyint',
		'nUpload' => 'tinyint',
		'nUploadArtikelKomplett' => 'tinyint',
		'nUploadArtikelPreise' => 'tinyint',
		'nUploadArtikelBestand' => 'tinyint',
		'nUploadKundendaten' => 'tinyint',
		'nUploadBilder' => 'tinyint',
		'nArtikelMergen' => 'tinyint',
		'nBilderLoeschen' => 'tinyint',
		'nMaxMB' => 'decimal',
		'nMaxBilder' => 'int',
		'nMaxArtikel' => 'int',
		'nHerstellerGefiltertSenden' => 'tinyint',
		'nImportBilder' => 'tinyint',
		'nMaxPull' => 'int',
		'nSteuerDurchWawiBerechnen' => 'bit',
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
