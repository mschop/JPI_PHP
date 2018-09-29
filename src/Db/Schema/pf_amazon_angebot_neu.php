<?php

namespace App\Db\Schema;

class pf_amazon_angebot_neu
{
	const TABLE_NAME = 'pf_amazon_angebot_neu';
	const cSellerSKU = 'cSellerSKU';
	const kUser = 'kUser';
	const cName = 'cName';
	const nQuantity = 'nQuantity';
	const fPrice = 'fPrice';
	const cProductId = 'cProductId';
	const nProductIdType = 'nProductIdType';
	const nCondition = 'nCondition';
	const dErstellt = 'dErstellt';
	const dGesendet = 'dGesendet';
	const nStatus = 'nStatus';
	const cLetzterFehler = 'cLetzterFehler';
	const nPlattform = 'nPlattform';
	const cConditionNote = 'cConditionNote';
	const kAmazonVersandgruppe = 'kAmazonVersandgruppe';
	const COLUMN_NAMES = [
		'cSellerSKU',
		'kUser',
		'cName',
		'nQuantity',
		'fPrice',
		'cProductId',
		'nProductIdType',
		'nCondition',
		'dErstellt',
		'dGesendet',
		'nStatus',
		'cLetzterFehler',
		'nPlattform',
		'cConditionNote',
		'kAmazonVersandgruppe',
	];
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
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nQuantity' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPrice' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cProductId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'nProductIdType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nCondition' => [
			'type' => 'tinyint',
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
		'dGesendet' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLetzterFehler' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
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
		'cConditionNote' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'kAmazonVersandgruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int kUser */
	public $kUser;

	/** @var string cName */
	public $cName;

	/** @var int nQuantity */
	public $nQuantity;

	/** @var string fPrice */
	public $fPrice;

	/** @var string cProductId */
	public $cProductId;

	/** @var int nProductIdType */
	public $nProductIdType;

	/** @var int nCondition */
	public $nCondition;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dGesendet */
	public $dGesendet;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cLetzterFehler */
	public $cLetzterFehler;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var string cConditionNote */
	public $cConditionNote;

	/** @var int kAmazonVersandgruppe */
	public $kAmazonVersandgruppe;
}
