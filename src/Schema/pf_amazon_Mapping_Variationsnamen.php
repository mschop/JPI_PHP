<?php

namespace App\Schema;

class pf_amazon_Mapping_Variationsnamen
{
	const TABLE_NAME = 'pf_amazon_Mapping_Variationsnamen';
	const kMapping_Variationsnamen = 'kMapping_Variationsnamen';
	const cWawiVariation = 'cWawiVariation';
	const kMapping_AmazonVariationen = 'kMapping_AmazonVariationen';
	const COLUMN_NAMES = ['kMapping_Variationsnamen', 'cWawiVariation', 'kMapping_AmazonVariationen'];
	const COLUMN_TYPES = [
		'kMapping_Variationsnamen' => 'int',
		'cWawiVariation' => 'varchar',
		'kMapping_AmazonVariationen' => 'int',
	];

	/** @var int kMapping_Variationsnamen */
	public $kMapping_Variationsnamen;

	/** @var string cWawiVariation */
	public $cWawiVariation;

	/** @var int kMapping_AmazonVariationen */
	public $kMapping_AmazonVariationen;
}
