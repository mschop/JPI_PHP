<?php

namespace App\Db\Schema;

class ebay_log
{
	const TABLE_NAME = 'ebay_log';
	const dDatum = 'dDatum';
	const cString = 'cString';
	const cText = 'cText';
	const kItem = 'kItem';
	const COLUMN_NAMES = ['dDatum', 'cString', 'cText', 'kItem'];
	const COLUMN_DEFINITIONS = [
		'dDatum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
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
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string dDatum */
	public $dDatum;

	/** @var string cString */
	public $cString;

	/** @var string cText */
	public $cText;

	/** @var int kItem */
	public $kItem;
}
