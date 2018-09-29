<?php

namespace App\Db\Schema;

class pf_amazon_apa_preis
{
	const TABLE_NAME = 'pf_amazon_apa_preis';
	const cSellerSKU = 'cSellerSKU';
	const nPlattform = 'nPlattform';
	const fPreis = 'fPreis';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['cSellerSKU', 'nPlattform', 'fPreis', 'dErstellt'];
	const COLUMN_DEFINITIONS = [
		'cSellerSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var string fPreis */
	public $fPreis;

	/** @var string dErstellt */
	public $dErstellt;
}
