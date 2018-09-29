<?php

namespace App\Db\Schema;

class tKundenDrucktext
{
	const TABLE_NAME = 'tKundenDrucktext';
	const kKundenDrucktext = 'kKundenDrucktext';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKundenDrucktext', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kKundenDrucktext' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kKundenDrucktext */
	public $kKundenDrucktext;

	/** @var string cName */
	public $cName;
}
