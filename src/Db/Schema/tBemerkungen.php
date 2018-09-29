<?php

namespace App\Db\Schema;

class tBemerkungen
{
	const TABLE_NAME = 'tBemerkungen';
	const kBemerkungen = 'kBemerkungen';
	const cName = 'cName';
	const cString = 'cString';
	const COLUMN_NAMES = ['kBemerkungen', 'cName', 'cString'];
	const COLUMN_DEFINITIONS = [
		'kBemerkungen' => [
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
		'cString' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBemerkungen */
	public $kBemerkungen;

	/** @var string cName */
	public $cName;

	/** @var string cString */
	public $cString;
}
