<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kBestellPos' => 'int',
		'tArtikel_kArtikel' => 'int',
		'tBestellung_kBestellung' => 'int',
		'fVKPreis' => 'decimal',
		'fMwSt' => 'decimal',
		'nAnzahl' => 'decimal',
		'fRabatt' => 'decimal',
		'cString' => 'varchar',
		'fVKNetto' => 'decimal',
		'cArtNr' => 'varchar',
		'nType' => 'tinyint',
		'cHinweis' => 'varchar',
		'nHatUpload' => 'int',
		'cUnique' => 'varchar',
		'kKonfigitem' => 'int',
		'nDropshipping' => 'tinyint',
		'fEKNetto' => 'decimal',
		'cOrderItemId' => 'varchar',
		'cItemID' => 'varchar',
		'cTransactionID' => 'varchar',
		'kAmazonBestellungPos' => 'int',
		'nSort' => 'int',
		'kBestellStueckliste' => 'int',
		'cStringStandard' => 'varchar',
		'cEinheit' => 'varchar',
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
