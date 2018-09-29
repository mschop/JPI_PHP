<?php

namespace App\Db\Schema;

class pf_amazon_Mapping_Variationswerte
{
	const TABLE_NAME = 'pf_amazon_Mapping_Variationswerte';
	const kMapping_Variationswerte = 'kMapping_Variationswerte';
	const cValue = 'cValue';
	const cAmazonValue = 'cAmazonValue';
	const kGroup = 'kGroup';
	const COLUMN_NAMES = ['kMapping_Variationswerte', 'cValue', 'cAmazonValue', 'kGroup'];
	const COLUMN_DEFINITIONS = [
		'kMapping_Variationswerte' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cAmazonValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'kGroup' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMapping_Variationswerte */
	public $kMapping_Variationswerte;

	/** @var string cValue */
	public $cValue;

	/** @var string cAmazonValue */
	public $cAmazonValue;

	/** @var int kGroup */
	public $kGroup;
}
