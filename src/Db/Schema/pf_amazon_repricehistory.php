<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kMessage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSellerSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fPreisAlt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreisNeu' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
