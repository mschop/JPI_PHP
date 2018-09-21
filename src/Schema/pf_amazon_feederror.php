<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kUser' => 'int',
		'cSKU' => 'varchar',
		'nErrorCode' => 'int',
		'cErrorType' => 'varchar',
		'cErrorMessage' => 'varchar',
		'cAbhilfe' => 'varchar',
		'dErstellt' => 'datetime',
		'nPlattform' => 'int',
		'cFeedType' => 'varchar',
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
