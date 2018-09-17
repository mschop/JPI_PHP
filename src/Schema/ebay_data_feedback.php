<?php

namespace App\Schema;

class ebay_data_feedback
{
	const TABLE_NAME = 'ebay_data_feedback';
	const kFeedback = 'kFeedback';
	const kEbayUser = 'kEbayUser';
	const cString = 'cString';

	/** @var int kFeedback */
	public $kFeedback;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cString */
	public $cString;
}
