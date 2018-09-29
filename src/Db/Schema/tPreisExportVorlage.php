<?php

namespace App\Db\Schema;

class tPreisExportVorlage
{
	const TABLE_NAME = 'tPreisExportVorlage';
	const kPreisExportVorlage = 'kPreisExportVorlage';
	const cName = 'cName';
	const kPlattform = 'kPlattform';
	const kKundengruppe = 'kKundengruppe';
	const sMapping = 'sMapping';
	const COLUMN_NAMES = ['kPreisExportVorlage', 'cName', 'kPlattform', 'kKundengruppe', 'sMapping'];
	const COLUMN_DEFINITIONS = [
		'kPreisExportVorlage' => [
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
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'sMapping' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kPreisExportVorlage */
	public $kPreisExportVorlage;

	/** @var string cName */
	public $cName;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var string sMapping */
	public $sMapping;
}
