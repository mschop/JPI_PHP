<?php

namespace App\Db\Schema;

class tUserSetting
{
	const TABLE_NAME = 'tUserSetting';
	const kUserSetting = 'kUserSetting';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kUserSetting', 'kBenutzer', 'cName', 'cWert'];
	const COLUMN_DEFINITIONS = [
		'kUserSetting' => [
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

	/** @var int kUserSetting */
	public $kUserSetting;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
