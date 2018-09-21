<?php

namespace App\Schema;

class ebay_synch
{
	const TABLE_NAME = 'ebay_synch';
	const ip = 'ip';
	const COLUMN_NAMES = ['ip'];
	const COLUMN_TYPES = ['ip' => 'varchar'];

	/** @var string ip */
	public $ip;
}
