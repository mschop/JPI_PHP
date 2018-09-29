<?php

namespace App\Db\Schema;

class tVersandschnittstellenKonfiguration
{
	const TABLE_NAME = 'tVersandschnittstellenKonfiguration';
	const kVersandArt = 'kVersandArt';
	const cKey = 'cKey';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kVersandArt', 'cKey', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kVersandArt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKey' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kVersandArt */
	public $kVersandArt;

	/** @var string cKey */
	public $cKey;

	/** @var string cValue */
	public $cValue;
}
