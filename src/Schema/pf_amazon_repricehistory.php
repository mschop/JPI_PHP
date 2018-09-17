<?php

namespace App\Schema;

class pf_amazon_repricehistory
{
	const TABLE_NAME = 'pf_amazon_repricehistory';
	const kMessage = 'kMessage';
	const kUser = 'kUser';
	const cSellerSKU = 'cSellerSKU';
	const fPreisAlt = 'fPreisAlt';
	const fPreisNeu = 'fPreisNeu';
	const dErstellt = 'dErstellt';
	const nPlattform = 'nPlattform';

	/** @var int kMessage */
	public $kMessage;

	/** @var int kUser */
	public $kUser;

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var string fPreisAlt */
	public $fPreisAlt;

	/** @var string fPreisNeu */
	public $fPreisNeu;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nPlattform */
	public $nPlattform;
}
