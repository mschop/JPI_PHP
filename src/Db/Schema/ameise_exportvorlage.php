<?php

namespace App\Db\Schema;

class ameise_exportvorlage
{
	const TABLE_NAME = 'ameise_exportvorlage';
	const kExportVorlage = 'kExportVorlage';
	const kExportTyp = 'kExportTyp';
	const kExportVorlageFilter = 'kExportVorlageFilter';
	const kStandardVorlage = 'kStandardVorlage';
	const cName = 'cName';
	const nDateiformat = 'nDateiformat';
	const nSpaltenbegrenzer = 'nSpaltenbegrenzer';
	const nKopfzeile = 'nKopfzeile';
	const nQuote = 'nQuote';
	const nEscape = 'nEscape';
	const cUebersicht = 'cUebersicht';
	const dErstellt = 'dErstellt';
	const nDeleted = 'nDeleted';
	const cExt = 'cExt';
	const nDezimalTrennzeichen = 'nDezimalTrennzeichen';
	const nTausenderTrennzeichen = 'nTausenderTrennzeichen';
	const nNachkommastellen = 'nNachkommastellen';
	const COLUMN_NAMES = [
		'kExportVorlage',
		'kExportTyp',
		'kExportVorlageFilter',
		'kStandardVorlage',
		'cName',
		'nDateiformat',
		'nSpaltenbegrenzer',
		'nKopfzeile',
		'nQuote',
		'nEscape',
		'cUebersicht',
		'dErstellt',
		'nDeleted',
		'cExt',
		'nDezimalTrennzeichen',
		'nTausenderTrennzeichen',
		'nNachkommastellen',
	];
	const COLUMN_DEFINITIONS = [
		'kExportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kExportTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kExportVorlageFilter' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStandardVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
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
		'nDateiformat' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSpaltenbegrenzer' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKopfzeile' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQuote' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEscape' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cUebersicht' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDeleted' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cExt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
		'nDezimalTrennzeichen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTausenderTrennzeichen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nNachkommastellen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kExportVorlage */
	public $kExportVorlage;

	/** @var int kExportTyp */
	public $kExportTyp;

	/** @var int kExportVorlageFilter */
	public $kExportVorlageFilter;

	/** @var int kStandardVorlage */
	public $kStandardVorlage;

	/** @var string cName */
	public $cName;

	/** @var int nDateiformat */
	public $nDateiformat;

	/** @var int nSpaltenbegrenzer */
	public $nSpaltenbegrenzer;

	/** @var int nKopfzeile */
	public $nKopfzeile;

	/** @var int nQuote */
	public $nQuote;

	/** @var int nEscape */
	public $nEscape;

	/** @var string cUebersicht */
	public $cUebersicht;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nDeleted */
	public $nDeleted;

	/** @var string cExt */
	public $cExt;

	/** @var int nDezimalTrennzeichen */
	public $nDezimalTrennzeichen;

	/** @var int nTausenderTrennzeichen */
	public $nTausenderTrennzeichen;

	/** @var int nNachkommastellen */
	public $nNachkommastellen;
}
