<?php

namespace App\Db\Schema;

class tZahlungsabgleichLogeintrag
{
	const TABLE_NAME = 'tZahlungsabgleichLogeintrag';
	const kZahlungsabgleichLogeintrag = 'kZahlungsabgleichLogeintrag';
	const kZahlungsabgleichLogsitzung = 'kZahlungsabgleichLogsitzung';
	const dZeitpunkt = 'dZeitpunkt';
	const nSchweregrad = 'nSchweregrad';
	const cMeldung = 'cMeldung';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const cKontoIdentifikation = 'cKontoIdentifikation';
	const COLUMN_NAMES = [
		'kZahlungsabgleichLogeintrag',
		'kZahlungsabgleichLogsitzung',
		'dZeitpunkt',
		'nSchweregrad',
		'cMeldung',
		'kZahlungsabgleichModul',
		'cKontoIdentifikation',
	];
	const COLUMN_DEFINITIONS = [
		'kZahlungsabgleichLogeintrag' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZahlungsabgleichLogsitzung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitpunkt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSchweregrad' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMeldung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 2048,
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
		'cKontoIdentifikation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kZahlungsabgleichLogeintrag */
	public $kZahlungsabgleichLogeintrag;

	/** @var int kZahlungsabgleichLogsitzung */
	public $kZahlungsabgleichLogsitzung;

	/** @var string dZeitpunkt */
	public $dZeitpunkt;

	/** @var int nSchweregrad */
	public $nSchweregrad;

	/** @var string cMeldung */
	public $cMeldung;

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var string cKontoIdentifikation */
	public $cKontoIdentifikation;
}
