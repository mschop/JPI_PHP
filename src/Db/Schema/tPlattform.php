<?php

namespace App\Db\Schema;

class tPlattform
{
	const TABLE_NAME = 'tPlattform';
	const nPlattform = 'nPlattform';
	const cID = 'cID';
	const cName = 'cName';
	const nInet = 'nInet';
	const cWaehrung = 'cWaehrung';
	const COLUMN_NAMES = ['nPlattform', 'cID', 'cName', 'nInet', 'cWaehrung'];
	const COLUMN_DEFINITIONS = [
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
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
		'nInet' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWaehrung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int nPlattform */
	public $nPlattform;

	/** @var string cID */
	public $cID;

	/** @var string cName */
	public $cName;

	/** @var int nInet */
	public $nInet;

	/** @var string cWaehrung */
	public $cWaehrung;
}
