<?php

namespace App\Schema;

class tUserSetting
{
	const TABLE_NAME = 'tUserSetting';
	const kUserSetting = 'kUserSetting';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const cWert = 'cWert';

	/** @var int kUserSetting */
	public $kUserSetting;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
