<?php

namespace App\Db\Schema;

class ebay_item_adderror
{
	const TABLE_NAME = 'ebay_item_adderror';
	const kItemAddError = 'kItemAddError';
	const kEbayuser = 'kEbayuser';
	const kItem = 'kItem';
	const ShortMessage = 'ShortMessage';
	const LongMessage = 'LongMessage';
	const cAbhilfe = 'cAbhilfe';
	const dZeitpunkt = 'dZeitpunkt';
	const epidSuggestion = 'epidSuggestion';
	const COLUMN_NAMES = [
		'kItemAddError',
		'kEbayuser',
		'kItem',
		'ShortMessage',
		'LongMessage',
		'cAbhilfe',
		'dZeitpunkt',
		'epidSuggestion',
	];
	const COLUMN_DEFINITIONS = [
		'kItemAddError' => [
			'type' => 'bigint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayuser' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ShortMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'LongMessage' => [
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
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'dZeitpunkt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'epidSuggestion' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kItemAddError */
	public $kItemAddError;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var int kItem */
	public $kItem;

	/** @var string ShortMessage */
	public $ShortMessage;

	/** @var string LongMessage */
	public $LongMessage;

	/** @var string cAbhilfe */
	public $cAbhilfe;

	/** @var string dZeitpunkt */
	public $dZeitpunkt;

	/** @var string epidSuggestion */
	public $epidSuggestion;
}
