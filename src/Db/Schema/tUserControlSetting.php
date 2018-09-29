<?php

namespace App\Db\Schema;

class tUserControlSetting
{
	const TABLE_NAME = 'tUserControlSetting';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const cNameTopLevelControl = 'cNameTopLevelControl';
	const nSetting = 'nSetting';
	const COLUMN_NAMES = ['kBenutzer', 'cName', 'cNameTopLevelControl', 'nSetting'];
	const COLUMN_DEFINITIONS = [
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
		'cNameTopLevelControl' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSetting' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cName */
	public $cName;

	/** @var string cNameTopLevelControl */
	public $cNameTopLevelControl;

	/** @var int nSetting */
	public $nSetting;
}
