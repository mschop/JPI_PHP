<?php

namespace App\Db\Schema;

class ameise_exportvorlagefilterext
{
	const TABLE_NAME = 'ameise_exportvorlagefilterext';
	const kExportVorlageFilterExt = 'kExportVorlageFilterExt';
	const kExportVorlageFilter = 'kExportVorlageFilter';
	const cName = 'cName';
	const cAdd = 'cAdd';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kExportVorlageFilterExt', 'kExportVorlageFilter', 'cName', 'cAdd', 'cWert'];
	const COLUMN_DEFINITIONS = [
		'kExportVorlageFilterExt' => [
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
		'cAdd' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kExportVorlageFilterExt */
	public $kExportVorlageFilterExt;

	/** @var int kExportVorlageFilter */
	public $kExportVorlageFilter;

	/** @var string cName */
	public $cName;

	/** @var string cAdd */
	public $cAdd;

	/** @var string cWert */
	public $cWert;
}
