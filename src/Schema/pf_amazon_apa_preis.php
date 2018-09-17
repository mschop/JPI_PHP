<?php

namespace App\Schema;

class pf_amazon_apa_preis
{
	const TABLE_NAME = 'pf_amazon_apa_preis';
	const cSellerSKU = 'cSellerSKU';
	const nPlattform = 'nPlattform';
	const fPreis = 'fPreis';
	const dErstellt = 'dErstellt';

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var string fPreis */
	public $fPreis;

	/** @var string dErstellt */
	public $dErstellt;
}
