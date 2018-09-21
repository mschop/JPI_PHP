<?php

namespace App\Schema;

class tKundenDrucktext
{
	const TABLE_NAME = 'tKundenDrucktext';
	const kKundenDrucktext = 'kKundenDrucktext';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKundenDrucktext', 'cName'];
	const COLUMN_TYPES = ['kKundenDrucktext' => 'int', 'cName' => 'varchar'];

	/** @var int kKundenDrucktext */
	public $kKundenDrucktext;

	/** @var string cName */
	public $cName;
}
