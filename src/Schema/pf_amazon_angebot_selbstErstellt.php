<?php

namespace App\Schema;

class pf_amazon_angebot_selbstErstellt
{
	const TABLE_NAME = 'pf_amazon_angebot_selbstErstellt';
	const cSellerSKU = 'cSellerSKU';
	const kUser = 'kUser';
	const nPlattform = 'nPlattform';
	const kItem = 'kItem';
	const dErstellt = 'dErstellt';
	const nStatus = 'nStatus';

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var string kUser */
	public $kUser;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int kItem */
	public $kItem;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nStatus */
	public $nStatus;
}
