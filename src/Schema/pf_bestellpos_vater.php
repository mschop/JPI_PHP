<?php

namespace App\Schema;

class pf_bestellpos_vater
{
	const TABLE_NAME = 'pf_bestellpos_vater';
	const kBestellPos = 'kBestellPos';
	const cSellerSKU = 'cSellerSKU';
	const COLUMN_NAMES = ['kBestellPos', 'cSellerSKU'];
	const COLUMN_TYPES = ['kBestellPos' => 'int', 'cSellerSKU' => 'varchar'];

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var string cSellerSKU */
	public $cSellerSKU;
}
