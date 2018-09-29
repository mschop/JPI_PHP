<?php

namespace App\Db\Schema;

class tStatistikVorlageChartEinstellung
{
	const TABLE_NAME = 'tStatistikVorlageChartEinstellung';
	const kStatistikVorlage = 'kStatistikVorlage';
	const cName = 'cName';
	const cValue = 'cValue';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kStatistikVorlage', 'cName', 'cValue', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kStatistikVorlage' => [
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
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
	];

	/** @var int kStatistikVorlage */
	public $kStatistikVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;

	/** @var int nSort */
	public $nSort;
}
