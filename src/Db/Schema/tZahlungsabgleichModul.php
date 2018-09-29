<?php

namespace App\Db\Schema;

class tZahlungsabgleichModul
{
	const TABLE_NAME = 'tZahlungsabgleichModul';
	const kZahlungsabgleichModul = 'kZahlungsabgleichModul';
	const cModulID = 'cModulID';
	const cEinstellungen = 'cEinstellungen';
	const COLUMN_NAMES = ['kZahlungsabgleichModul', 'cModulID', 'cEinstellungen'];
	const COLUMN_DEFINITIONS = [
		'kZahlungsabgleichModul' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cModulID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cEinstellungen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kZahlungsabgleichModul */
	public $kZahlungsabgleichModul;

	/** @var string cModulID */
	public $cModulID;

	/** @var string cEinstellungen */
	public $cEinstellungen;
}
