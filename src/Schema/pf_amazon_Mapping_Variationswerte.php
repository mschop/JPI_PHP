<?php

namespace App\Schema;

class pf_amazon_Mapping_Variationswerte
{
	const TABLE_NAME = 'pf_amazon_Mapping_Variationswerte';
	const kMapping_Variationswerte = 'kMapping_Variationswerte';
	const cValue = 'cValue';
	const cAmazonValue = 'cAmazonValue';
	const kGroup = 'kGroup';
	const COLUMN_NAMES = ['kMapping_Variationswerte', 'cValue', 'cAmazonValue', 'kGroup'];
	const COLUMN_TYPES = [
		'kMapping_Variationswerte' => 'int',
		'cValue' => 'varchar',
		'cAmazonValue' => 'varchar',
		'kGroup' => 'int',
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
