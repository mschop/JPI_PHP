<?php

namespace App\Db\Schema;

class tStatistikVorlage
{
	const TABLE_NAME = 'tStatistikVorlage';
	const kStatistikVorlage = 'kStatistikVorlage';
	const kStatistikAuswertungstyp = 'kStatistikAuswertungstyp';
	const kStatistikVorlageOrdner = 'kStatistikVorlageOrdner';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const cSpaltennameX = 'cSpaltennameX';
	const cSpaltennameSeries = 'cSpaltennameSeries';
	const cSQL = 'cSQL';
	const cZeitraum = 'cZeitraum';
	const nSort = 'nSort';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = [
		'kStatistikVorlage',
		'kStatistikAuswertungstyp',
		'kStatistikVorlageOrdner',
		'kBenutzer',
		'cName',
		'cSpaltennameX',
		'cSpaltennameSeries',
		'cSQL',
		'cZeitraum',
		'nSort',
		'cBeschreibung',
	];
	const COLUMN_DEFINITIONS = [
		'kStatistikVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStatistikAuswertungstyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStatistikVorlageOrdner' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'cSpaltennameX' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSpaltennameSeries' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSQL' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cZeitraum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kStatistikVorlage */
	public $kStatistikVorlage;

	/** @var int kStatistikAuswertungstyp */
	public $kStatistikAuswertungstyp;

	/** @var int kStatistikVorlageOrdner */
	public $kStatistikVorlageOrdner;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cName */
	public $cName;

	/** @var string cSpaltennameX */
	public $cSpaltennameX;

	/** @var string cSpaltennameSeries */
	public $cSpaltennameSeries;

	/** @var string cSQL */
	public $cSQL;

	/** @var string cZeitraum */
	public $cZeitraum;

	/** @var int nSort */
	public $nSort;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
