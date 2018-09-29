<?php

namespace App\Db\Schema;

class pf_bestellpos_vater
{
	const TABLE_NAME = 'pf_bestellpos_vater';
	const kBestellPos = 'kBestellPos';
	const cSellerSKU = 'cSellerSKU';
	const COLUMN_NAMES = ['kBestellPos', 'cSellerSKU'];
	const COLUMN_DEFINITIONS = [
		'kBestellPos' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var string cSellerSKU */
	public $cSellerSKU;
}
