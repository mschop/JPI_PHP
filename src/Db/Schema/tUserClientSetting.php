<?php

namespace App\Db\Schema;

class tUserClientSetting
{
	const TABLE_NAME = 'tUserClientSetting';
	const kUserClientSetting = 'kUserClientSetting';
	const kBenutzer = 'kBenutzer';
	const cRechnername = 'cRechnername';
	const cName = 'cName';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kUserClientSetting', 'kBenutzer', 'cRechnername', 'cName', 'cWert'];
	const COLUMN_DEFINITIONS = [
		'kUserClientSetting' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnername' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kUserClientSetting */
	public $kUserClientSetting;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
