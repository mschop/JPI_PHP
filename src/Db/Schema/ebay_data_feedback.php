<?php

namespace App\Db\Schema;

class ebay_data_feedback
{
	const TABLE_NAME = 'ebay_data_feedback';
	const kFeedback = 'kFeedback';
	const kEbayUser = 'kEbayUser';
	const cString = 'cString';
	const COLUMN_NAMES = ['kFeedback', 'kEbayUser', 'cString'];
	const COLUMN_DEFINITIONS = [
		'kFeedback' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cString' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kFeedback */
	public $kFeedback;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cString */
	public $cString;
}
