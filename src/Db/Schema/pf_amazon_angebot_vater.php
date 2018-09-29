<?php

namespace App\Db\Schema;

class pf_amazon_angebot_vater
{
	const TABLE_NAME = 'pf_amazon_angebot_vater';
	const cSellerSKU = 'cSellerSKU';
	const kUser = 'kUser';
	const cSellerSKUVater = 'cSellerSKUVater';
	const nPlattform = 'nPlattform';
	const COLUMN_NAMES = ['cSellerSKU', 'kUser', 'cSellerSKUVater', 'nPlattform'];
	const COLUMN_DEFINITIONS = [
		'cSellerSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSellerSKUVater' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
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
	];

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int kUser */
	public $kUser;

	/** @var string cSellerSKUVater */
	public $cSellerSKUVater;

	/** @var int nPlattform */
	public $nPlattform;
}
