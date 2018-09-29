<?php

namespace App\Db\Schema;

class pf_amazon_ItemMapping
{
	const TABLE_NAME = 'pf_amazon_ItemMapping';
	const kItemMapping = 'kItemMapping';
	const kItem = 'kItem';
	const cKey = 'cKey';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kItemMapping', 'kItem', 'cKey', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kItemMapping' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kItem' => [
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
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kItemMapping */
	public $kItemMapping;

	/** @var int kItem */
	public $kItem;

	/** @var string cKey */
	public $cKey;

	/** @var string cValue */
	public $cValue;
}
