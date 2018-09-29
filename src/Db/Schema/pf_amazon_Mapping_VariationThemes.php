<?php

namespace App\Db\Schema;

class pf_amazon_Mapping_VariationThemes
{
	const TABLE_NAME = 'pf_amazon_Mapping_VariationThemes';
	const kMapping_VariationThemes = 'kMapping_VariationThemes';
	const cName = 'cName';
	const COLUMN_NAMES = ['kMapping_VariationThemes', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kMapping_VariationThemes' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kMapping_VariationThemes */
	public $kMapping_VariationThemes;

	/** @var string cName */
	public $cName;
}
