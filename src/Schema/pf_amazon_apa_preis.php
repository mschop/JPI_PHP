<?php

namespace App\Schema;

class pf_amazon_apa_preis
{
	const TABLE_NAME = 'pf_amazon_apa_preis';
	const cSellerSKU = 'cSellerSKU';
	const nPlattform = 'nPlattform';
	const fPreis = 'fPreis';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['cSellerSKU', 'nPlattform', 'fPreis', 'dErstellt'];
	const COLUMN_TYPES = ['cSellerSKU' => 'varchar', 'nPlattform' => 'int', 'fPreis' => 'decimal', 'dErstellt' => 'datetime'];

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var string fPreis */
	public $fPreis;

	/** @var string dErstellt */
	public $dErstellt;
}
