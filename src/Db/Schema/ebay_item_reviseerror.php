<?php

namespace App\Db\Schema;

class ebay_item_reviseerror
{
	const TABLE_NAME = 'ebay_item_reviseerror';
	const kItemReviseError = 'kItemReviseError';
	const kEbayuser = 'kEbayuser';
	const kItem = 'kItem';
	const ShortMessage = 'ShortMessage';
	const LongMessage = 'LongMessage';
	const cAbhilfe = 'cAbhilfe';
	const dZeitpunkt = 'dZeitpunkt';
	const COLUMN_NAMES = ['kItemReviseError', 'kEbayuser', 'kItem', 'ShortMessage', 'LongMessage', 'cAbhilfe', 'dZeitpunkt'];
	const COLUMN_DEFINITIONS = [
		'kItemReviseError' => [
			'type' => 'int',
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
	];

	/** @var int kItemReviseError */
	public $kItemReviseError;

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
}
