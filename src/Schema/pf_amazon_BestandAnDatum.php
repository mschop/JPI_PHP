<?php

namespace App\Schema;

class pf_amazon_BestandAnDatum
{
	const TABLE_NAME = 'pf_amazon_BestandAnDatum';
	const kUser = 'kUser';
	const cSellerSKU = 'cSellerSKU';
	const dErstellt = 'dErstellt';

	/** @var int kUser */
	public $kUser;

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var string dErstellt */
	public $dErstellt;
}
