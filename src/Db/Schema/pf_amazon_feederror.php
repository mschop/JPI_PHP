<?php

namespace App\Db\Schema;

class pf_amazon_feederror
{
	const TABLE_NAME = 'pf_amazon_feederror';
	const kUser = 'kUser';
	const cSKU = 'cSKU';
	const nErrorCode = 'nErrorCode';
	const cErrorType = 'cErrorType';
	const cErrorMessage = 'cErrorMessage';
	const cAbhilfe = 'cAbhilfe';
	const dErstellt = 'dErstellt';
	const nPlattform = 'nPlattform';
	const cFeedType = 'cFeedType';
	const COLUMN_NAMES = [
		'kUser',
		'cSKU',
		'nErrorCode',
		'cErrorType',
		'cErrorMessage',
		'cAbhilfe',
		'dErstellt',
		'nPlattform',
		'cFeedType',
	];
	const COLUMN_DEFINITIONS = [
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'nErrorCode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cErrorType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cErrorMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cAbhilfe' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
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
		'cFeedType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kUser */
	public $kUser;

	/** @var string cSKU */
	public $cSKU;

	/** @var int nErrorCode */
	public $nErrorCode;

	/** @var string cErrorType */
	public $cErrorType;

	/** @var string cErrorMessage */
	public $cErrorMessage;

	/** @var string cAbhilfe */
	public $cAbhilfe;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var string cFeedType */
	public $cFeedType;
}
