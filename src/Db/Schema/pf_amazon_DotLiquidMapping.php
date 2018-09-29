<?php

namespace App\Db\Schema;

class pf_amazon_DotLiquidMapping
{
	const TABLE_NAME = 'pf_amazon_DotLiquidMapping';
	const kDotLiquidMapping = 'kDotLiquidMapping';
	const kGroup = 'kGroup';
	const cKey = 'cKey';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kDotLiquidMapping', 'kGroup', 'cKey', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kDotLiquidMapping' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kGroup' => [
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
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
	];

	/** @var int kDotLiquidMapping */
	public $kDotLiquidMapping;

	/** @var int kGroup */
	public $kGroup;

	/** @var string cKey */
	public $cKey;

	/** @var resource cValue */
	public $cValue;
}
