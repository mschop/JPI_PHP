<?php

namespace App\Db\Schema;

class pf_amazon_Mapping_Variationsnamen
{
	const TABLE_NAME = 'pf_amazon_Mapping_Variationsnamen';
	const kMapping_Variationsnamen = 'kMapping_Variationsnamen';
	const cWawiVariation = 'cWawiVariation';
	const kMapping_AmazonVariationen = 'kMapping_AmazonVariationen';
	const COLUMN_NAMES = ['kMapping_Variationsnamen', 'cWawiVariation', 'kMapping_AmazonVariationen'];
	const COLUMN_DEFINITIONS = [
		'kMapping_Variationsnamen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWawiVariation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'kMapping_AmazonVariationen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMapping_Variationsnamen */
	public $kMapping_Variationsnamen;

	/** @var string cWawiVariation */
	public $cWawiVariation;

	/** @var int kMapping_AmazonVariationen */
	public $kMapping_AmazonVariationen;
}
