<?php

namespace App\Db\Schema;

class ebay_synch
{
	const TABLE_NAME = 'ebay_synch';
	const ip = 'ip';
	const COLUMN_NAMES = ['ip'];
	const COLUMN_DEFINITIONS = [
		'ip' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string ip */
	public $ip;
}
