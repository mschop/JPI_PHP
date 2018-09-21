<?php

namespace App\Schema;

class pf_amazon_angebot_vater
{
	const TABLE_NAME = 'pf_amazon_angebot_vater';
	const cSellerSKU = 'cSellerSKU';
	const kUser = 'kUser';
	const cSellerSKUVater = 'cSellerSKUVater';
	const nPlattform = 'nPlattform';
	const COLUMN_NAMES = ['cSellerSKU', 'kUser', 'cSellerSKUVater', 'nPlattform'];
	const COLUMN_TYPES = ['cSellerSKU' => 'varchar', 'kUser' => 'int', 'cSellerSKUVater' => 'varchar', 'nPlattform' => 'int'];

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int kUser */
	public $kUser;

	/** @var string cSellerSKUVater */
	public $cSellerSKUVater;

	/** @var int nPlattform */
	public $nPlattform;
}
