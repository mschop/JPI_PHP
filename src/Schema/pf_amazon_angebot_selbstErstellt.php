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
	const COLUMN_NAMES = ['cSellerSKU', 'kUser', 'nPlattform', 'kItem', 'dErstellt', 'nStatus'];
	const COLUMN_TYPES = [
		'cSellerSKU' => 'varchar',
		'kUser' => 'varchar',
		'nPlattform' => 'int',
		'kItem' => 'int',
		'dErstellt' => 'datetime',
		'nStatus' => 'int',
	];

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
