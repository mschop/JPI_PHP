<?php

namespace App\Db\Schema;

class ameise_importvorlagefeldps
{
	const TABLE_NAME = 'ameise_importvorlagefeldps';
	const kImportVorlageFeldPS = 'kImportVorlageFeldPS';
	const kImportVorlage = 'kImportVorlage';
	const cTable = 'cTable';
	const cDBName = 'cDBName';
	const cPraefix = 'cPraefix';
	const cSuffix = 'cSuffix';
	const COLUMN_NAMES = ['kImportVorlageFeldPS', 'kImportVorlage', 'cTable', 'cDBName', 'cPraefix', 'cSuffix'];
	const COLUMN_DEFINITIONS = [
		'kImportVorlageFeldPS' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kImportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTable' => [
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
		'cPraefix' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSuffix' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kImportVorlageFeldPS */
	public $kImportVorlageFeldPS;

	/** @var int kImportVorlage */
	public $kImportVorlage;

	/** @var string cTable */
	public $cTable;

	/** @var string cDBName */
	public $cDBName;

	/** @var string cPraefix */
	public $cPraefix;

	/** @var string cSuffix */
	public $cSuffix;
}
