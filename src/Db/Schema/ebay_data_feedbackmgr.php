<?php

namespace App\Db\Schema;

class ebay_data_feedbackmgr
{
	const TABLE_NAME = 'ebay_data_feedbackmgr';
	const kFeedbackmgr = 'kFeedbackmgr';
	const kEbayUser = 'kEbayUser';
	const nOption = 'nOption';
	const nErinnerung = 'nErinnerung';
	const cMailText = 'cMailText';
	const nHTML = 'nHTML';
	const COLUMN_NAMES = ['kFeedbackmgr', 'kEbayUser', 'nOption', 'nErinnerung', 'cMailText', 'nHTML'];
	const COLUMN_DEFINITIONS = [
		'kFeedbackmgr' => [
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
		'nOption' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nErinnerung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMailText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nHTML' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kFeedbackmgr */
	public $kFeedbackmgr;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var int nOption */
	public $nOption;

	/** @var int nErinnerung */
	public $nErinnerung;

	/** @var string cMailText */
	public $cMailText;

	/** @var int nHTML */
	public $nHTML;
}
