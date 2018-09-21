<?php

namespace App\Schema;

class pf_amazon_Mapping_VariationThemes
{
	const TABLE_NAME = 'pf_amazon_Mapping_VariationThemes';
	const kMapping_VariationThemes = 'kMapping_VariationThemes';
	const cName = 'cName';
	const COLUMN_NAMES = ['kMapping_VariationThemes', 'cName'];
	const COLUMN_TYPES = ['kMapping_VariationThemes' => 'int', 'cName' => 'varchar'];

	/** @var int kMapping_VariationThemes */
	public $kMapping_VariationThemes;

	/** @var string cName */
	public $cName;
}
