<?php

namespace App\Schema;

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
