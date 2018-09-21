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
	const COLUMN_NAMES = ['kMessage', 'kUser', 'cSellerSKU', 'fPreisAlt', 'fPreisNeu', 'dErstellt', 'nPlattform'];
	const COLUMN_TYPES = [
		'kMessage' => 'int',
		'kUser' => 'int',
		'cSellerSKU' => 'varchar',
		'fPreisAlt' => 'decimal',
		'fPreisNeu' => 'decimal',
		'dErstellt' => 'datetime',
		'nPlattform' => 'int',
	];

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
