<?php

namespace App\Db\Schema;

class tZahlungsabgleichFilter
{
	const TABLE_NAME = 'tZahlungsabgleichFilter';
	const kZahlungsabgleichFilter = 'kZahlungsabgleichFilter';
	const cBeschreibung = 'cBeschreibung';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const nUmsatzart = 'nUmsatzart';
	const nFilterspalte = 'nFilterspalte';
	const nFilteroperator = 'nFilteroperator';
	const cFilterwert = 'cFilterwert';
	const nAktion = 'nAktion';
	const COLUMN_NAMES = [
		'kZahlungsabgleichFilter',
		'cBeschreibung',
		'kZahlungsabgleichModul',
		'nUmsatzart',
		'nFilterspalte',
		'nFilteroperator',
		'cFilterwert',
		'nAktion',
	];
	const COLUMN_DEFINITIONS = [
		'kZahlungsabgleichFilter' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'kZahlungsabgleichModul' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUmsatzart' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nFilterspalte' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nFilteroperator' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFilterwert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 300,
			'characterSetName' => 'iso_1',
		],
		'nAktion' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kZahlungsabgleichFilter */
	public $kZahlungsabgleichFilter;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var int nUmsatzart */
	public $nUmsatzart;

	/** @var int nFilterspalte */
	public $nFilterspalte;

	/** @var int nFilteroperator */
	public $nFilteroperator;

	/** @var string cFilterwert */
	public $cFilterwert;

	/** @var int nAktion */
	public $nAktion;
}
