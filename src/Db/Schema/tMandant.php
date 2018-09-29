<?php

namespace App\Db\Schema;

class tMandant
{
	const TABLE_NAME = 'tMandant';
	const kMandant = 'kMandant';
	const cName = 'cName';
	const cDB = 'cDB';
	const COLUMN_NAMES = ['kMandant', 'cName', 'cDB'];
	const COLUMN_DEFINITIONS = [
		'kMandant' => [
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
		'cDB' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kMandant */
	public $kMandant;

	/** @var string cName */
	public $cName;

	/** @var string cDB */
	public $cDB;
}
