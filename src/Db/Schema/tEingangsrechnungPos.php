<?php

namespace App\Db\Schema;

class tEingangsrechnungPos
{
	const TABLE_NAME = 'tEingangsrechnungPos';
	const kEingangsrechnungPos = 'kEingangsrechnungPos';
	const kEingangsrechnung = 'kEingangsrechnung';
	const kLieferantenbestellung = 'kLieferantenbestellung';
	const kArtikel = 'kArtikel';
	const cArtNr = 'cArtNr';
	const cLieferantenArtNr = 'cLieferantenArtNr';
	const cName = 'cName';
	const cLieferantenBezeichnung = 'cLieferantenBezeichnung';
	const cEinheit = 'cEinheit';
	const cHinweis = 'cHinweis';
	const fMenge = 'fMenge';
	const fEKNetto = 'fEKNetto';
	const fMwSt = 'fMwSt';
	const nPosTyp = 'nPosTyp';
	const COLUMN_NAMES = [
		'kEingangsrechnungPos',
		'kEingangsrechnung',
		'kLieferantenbestellung',
		'kArtikel',
		'cArtNr',
		'cLieferantenArtNr',
		'cName',
		'cLieferantenBezeichnung',
		'cEinheit',
		'cHinweis',
		'fMenge',
		'fEKNetto',
		'fMwSt',
		'nPosTyp',
	];
	const COLUMN_DEFINITIONS = [
		'kEingangsrechnungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEingangsrechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenbestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferantenArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferantenBezeichnung' => [
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
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fMenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
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
		'fMwSt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEingangsrechnungPos */
	public $kEingangsrechnungPos;

	/** @var int kEingangsrechnung */
	public $kEingangsrechnung;

	/** @var int kLieferantenbestellung */
	public $kLieferantenbestellung;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var string cLieferantenArtNr */
	public $cLieferantenArtNr;

	/** @var string cName */
	public $cName;

	/** @var string cLieferantenBezeichnung */
	public $cLieferantenBezeichnung;

	/** @var string cEinheit */
	public $cEinheit;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string fMenge */
	public $fMenge;

	/** @var string fEKNetto */
	public $fEKNetto;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var int nPosTyp */
	public $nPosTyp;
}
