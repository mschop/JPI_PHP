<?php

namespace App\Schema;

class ebay_usersites
{
	const TABLE_NAME = 'ebay_usersites';
	const kEbayuser = 'kEbayuser';
	const SiteId = 'SiteId';
	const COLUMN_NAMES = ['kEbayuser', 'SiteId'];
	const COLUMN_TYPES = ['kEbayuser' => 'int', 'SiteId' => 'int'];

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var int SiteId */
	public $SiteId;
}
