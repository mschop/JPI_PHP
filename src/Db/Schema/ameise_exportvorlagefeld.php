<?php

namespace App\Db\Schema;

class ameise_exportvorlagefeld
{
	const TABLE_NAME = 'ameise_exportvorlagefeld';
	const kExportVorlageFeld = 'kExportVorlageFeld';
	const kExportVorlage = 'kExportVorlage';
	const cName = 'cName';
	const cDBName = 'cDBName';
	const cKopfzeilenbeschriftung = 'cKopfzeilenbeschriftung';
	const nSpalte = 'nSpalte';
	const COLUMN_NAMES = ['kExportVorlageFeld', 'kExportVorlage', 'cName', 'cDBName', 'cKopfzeilenbeschriftung', 'nSpalte'];
	const COLUMN_DEFINITIONS = [
		'kExportVorlageFeld' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kExportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
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
		'cDBName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKopfzeilenbeschriftung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSpalte' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kExportVorlageFeld */
	public $kExportVorlageFeld;

	/** @var int kExportVorlage */
	public $kExportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cDBName */
	public $cDBName;

	/** @var string cKopfzeilenbeschriftung */
	public $cKopfzeilenbeschriftung;

	/** @var int nSpalte */
	public $nSpalte;
}
