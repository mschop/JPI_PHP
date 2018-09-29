<?php

namespace App\Db\Schema;

class tWebshopModule
{
	const TABLE_NAME = 'tWebshopModule';
	const cAPIKey = 'cAPIKey';
	const cLizenzkey = 'cLizenzkey';
	const cName = 'cName';
	const cID = 'cID';
	const COLUMN_NAMES = ['cAPIKey', 'cLizenzkey', 'cName', 'cID'];
	const COLUMN_DEFINITIONS = [
		'cAPIKey' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLizenzkey' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cAPIKey */
	public $cAPIKey;

	/** @var string cLizenzkey */
	public $cLizenzkey;

	/** @var string cName */
	public $cName;

	/** @var string cID */
	public $cID;
}
