<?php

namespace App\Schema;

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
	const COLUMN_NAMES = ['kItemAddError', 'kEbayuser', 'kItem', 'ShortMessage', 'LongMessage', 'cAbhilfe', 'dZeitpunkt'];
	const COLUMN_TYPES = [
		'kItemAddError' => 'bigint',
		'kEbayuser' => 'int',
		'kItem' => 'int',
		'ShortMessage' => 'varchar',
		'LongMessage' => 'varchar',
		'cAbhilfe' => 'varchar',
		'dZeitpunkt' => 'datetime',
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
}
