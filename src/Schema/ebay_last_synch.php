<?php

namespace App\Schema;

class ebay_last_synch
{
	const TABLE_NAME = 'ebay_last_synch';
	const info = 'info';
	const COLUMN_NAMES = ['info'];
	const COLUMN_TYPES = ['info' => 'varchar'];

	/** @var string info */
	public $info;
}
