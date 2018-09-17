<?php

namespace App\Schema;

class tUserClientSetting
{
	const TABLE_NAME = 'tUserClientSetting';
	const kUserClientSetting = 'kUserClientSetting';
	const kBenutzer = 'kBenutzer';
	const cRechnername = 'cRechnername';
	const cName = 'cName';
	const cWert = 'cWert';

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
