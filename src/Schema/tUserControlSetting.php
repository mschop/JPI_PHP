<?php

namespace App\Schema;

class tUserControlSetting
{
	const TABLE_NAME = 'tUserControlSetting';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const cNameTopLevelControl = 'cNameTopLevelControl';
	const nSetting = 'nSetting';
	const COLUMN_NAMES = ['kBenutzer', 'cName', 'cNameTopLevelControl', 'nSetting'];
	const COLUMN_TYPES = [
		'kBenutzer' => 'int',
		'cName' => 'varchar',
		'cNameTopLevelControl' => 'varchar',
		'nSetting' => 'tinyint',
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
