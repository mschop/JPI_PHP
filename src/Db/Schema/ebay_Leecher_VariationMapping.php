<?php

namespace App\Db\Schema;

class ebay_Leecher_VariationMapping
{
	const TABLE_NAME = 'ebay_Leecher_VariationMapping';
	const kEbayLeecherVariationMapping = 'kEbayLeecherVariationMapping';
	const cIso1 = 'cIso1';
	const cValue1 = 'cValue1';
	const cIso2 = 'cIso2';
	const cValue2 = 'cValue2';
	const COLUMN_NAMES = ['kEbayLeecherVariationMapping', 'cIso1', 'cValue1', 'cIso2', 'cValue2'];
	const COLUMN_DEFINITIONS = [
		'kEbayLeecherVariationMapping' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cIso1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cValue1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cIso2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cValue2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEbayLeecherVariationMapping */
	public $kEbayLeecherVariationMapping;

	/** @var string cIso1 */
	public $cIso1;

	/** @var string cValue1 */
	public $cValue1;

	/** @var string cIso2 */
	public $cIso2;

	/** @var string cValue2 */
	public $cValue2;
}
