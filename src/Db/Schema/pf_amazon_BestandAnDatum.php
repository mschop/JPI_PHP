<?php

namespace App\Db\Schema;

class pf_amazon_BestandAnDatum
{
	const TABLE_NAME = 'pf_amazon_BestandAnDatum';
	const kUser = 'kUser';
	const cSellerSKU = 'cSellerSKU';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kUser', 'cSellerSKU', 'dErstellt'];
	const COLUMN_DEFINITIONS = [
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSellerSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kUser */
	public $kUser;

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var string dErstellt */
	public $dErstellt;
}
