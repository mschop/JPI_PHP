<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kFeedbackmgr' => 'int',
		'kEbayUser' => 'int',
		'nOption' => 'tinyint',
		'nErinnerung' => 'tinyint',
		'cMailText' => 'varchar',
		'nHTML' => 'tinyint',
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
