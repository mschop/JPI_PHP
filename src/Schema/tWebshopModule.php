<?php

namespace App\Schema;

class tWebshopModule
{
	const TABLE_NAME = 'tWebshopModule';
	const cAPIKey = 'cAPIKey';
	const cLizenzkey = 'cLizenzkey';
	const cName = 'cName';
	const cID = 'cID';
	const COLUMN_NAMES = ['cAPIKey', 'cLizenzkey', 'cName', 'cID'];
	const COLUMN_TYPES = ['cAPIKey' => 'varchar', 'cLizenzkey' => 'varchar', 'cName' => 'varchar', 'cID' => 'varchar'];

	/** @var string cAPIKey */
	public $cAPIKey;

	/** @var string cLizenzkey */
	public $cLizenzkey;

	/** @var string cName */
	public $cName;

	/** @var string cID */
	public $cID;
}
