<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'cSellerSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kUser' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
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
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
