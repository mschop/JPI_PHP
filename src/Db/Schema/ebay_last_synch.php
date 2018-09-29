<?php

namespace App\Db\Schema;

class ebay_last_synch
{
	const TABLE_NAME = 'ebay_last_synch';
	const info = 'info';
	const COLUMN_NAMES = ['info'];
	const COLUMN_DEFINITIONS = [
		'info' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string info */
	public $info;
}
