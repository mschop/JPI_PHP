<?php

namespace App\Db\Schema;

class tbestellpos
{
	const TABLE_NAME = 'tbestellpos';
	const kBestellPos = 'kBestellPos';
	const tArtikel_kArtikel = 'tArtikel_kArtikel';
	const tBestellung_kBestellung = 'tBestellung_kBestellung';
	const fVKPreis = 'fVKPreis';
	const fMwSt = 'fMwSt';
	const nAnzahl = 'nAnzahl';
	const fRabatt = 'fRabatt';
	const cString = 'cString';
	const fVKNetto = 'fVKNetto';
	const cArtNr = 'cArtNr';
	const nType = 'nType';
	const cHinweis = 'cHinweis';
	const nHatUpload = 'nHatUpload';
	const cUnique = 'cUnique';
	const kKonfigitem = 'kKonfigitem';
	const nDropshipping = 'nDropshipping';
	const fEKNetto = 'fEKNetto';
	const cOrderItemId = 'cOrderItemId';
	const cItemID = 'cItemID';
	const cTransactionID = 'cTransactionID';
	const kAmazonBestellungPos = 'kAmazonBestellungPos';
	const nSort = 'nSort';
	const kBestellStueckliste = 'kBestellStueckliste';
	const cStringStandard = 'cStringStandard';
	const cEinheit = 'cEinheit';
	const COLUMN_NAMES = [
		'kBestellPos',
		'tArtikel_kArtikel',
		'tBestellung_kBestellung',
		'fVKPreis',
		'fMwSt',
		'nAnzahl',
		'fRabatt',
		'cString',
		'fVKNetto',
		'cArtNr',
		'nType',
		'cHinweis',
		'nHatUpload',
		'cUnique',
		'kKonfigitem',
		'nDropshipping',
		'fEKNetto',
		'cOrderItemId',
		'cItemID',
		'cTransactionID',
		'kAmazonBestellungPos',
		'nSort',
		'kBestellStueckliste',
		'cStringStandard',
		'cEinheit',
	];
	const COLUMN_DEFINITIONS = [
		'kBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'tArtikel_kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'tBestellung_kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVKPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMwSt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fRabatt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cString' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fVKNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'nHatUpload' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cUnique' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'kKonfigitem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDropshipping' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fEKNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cOrderItemId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cItemID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTransactionID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kAmazonBestellungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellStueckliste' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStringStandard' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cEinheit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int tArtikel_kArtikel */
	public $tArtikel_kArtikel;

	/** @var int tBestellung_kBestellung */
	public $tBestellung_kBestellung;

	/** @var string fVKPreis */
	public $fVKPreis;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string nAnzahl */
	public $nAnzahl;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var string cString */
	public $cString;

	/** @var string fVKNetto */
	public $fVKNetto;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var int nType */
	public $nType;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var int nHatUpload */
	public $nHatUpload;

	/** @var string cUnique */
	public $cUnique;

	/** @var int kKonfigitem */
	public $kKonfigitem;

	/** @var int nDropshipping */
	public $nDropshipping;

	/** @var string fEKNetto */
	public $fEKNetto;

	/** @var string cOrderItemId */
	public $cOrderItemId;

	/** @var string cItemID */
	public $cItemID;

	/** @var string cTransactionID */
	public $cTransactionID;

	/** @var int kAmazonBestellungPos */
	public $kAmazonBestellungPos;

	/** @var int nSort */
	public $nSort;

	/** @var int kBestellStueckliste */
	public $kBestellStueckliste;

	/** @var string cStringStandard */
	public $cStringStandard;

	/** @var string cEinheit */
	public $cEinheit;
}
