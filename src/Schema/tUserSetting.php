<?php

namespace App\Schema;

class tUserSetting
{
	const TABLE_NAME = 'tUserSetting';
	const kUserSetting = 'kUserSetting';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kUserSetting', 'kBenutzer', 'cName', 'cWert'];
	const COLUMN_TYPES = ['kUserSetting' => 'int', 'kBenutzer' => 'int', 'cName' => 'varchar', 'cWert' => 'varchar'];

	/** @var int kUserSetting */
	public $kUserSetting;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
