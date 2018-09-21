<?php

namespace App\Schema;

class ebay_data_feedback
{
	const TABLE_NAME = 'ebay_data_feedback';
	const kFeedback = 'kFeedback';
	const kEbayUser = 'kEbayUser';
	const cString = 'cString';
	const COLUMN_NAMES = ['kFeedback', 'kEbayUser', 'cString'];
	const COLUMN_TYPES = ['kFeedback' => 'int', 'kEbayUser' => 'int', 'cString' => 'varchar'];

	/** @var int kFeedback */
	public $kFeedback;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cString */
	public $cString;
}
