<?php

namespace App\Schema;

class pf_amazon_BestandAnDatum
{
	const TABLE_NAME = 'pf_amazon_BestandAnDatum';
	const kUser = 'kUser';
	const cSellerSKU = 'cSellerSKU';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kUser', 'cSellerSKU', 'dErstellt'];
	const COLUMN_TYPES = ['kUser' => 'int', 'cSellerSKU' => 'varchar', 'dErstellt' => 'datetime'];

	/** @var int kUser */
	public $kUser;

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var string dErstellt */
	public $dErstellt;
}
