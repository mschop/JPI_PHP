<?php

namespace App\Schema;

class tMandant
{
	const TABLE_NAME = 'tMandant';
	const kMandant = 'kMandant';
	const cName = 'cName';
	const cDB = 'cDB';
	const COLUMN_NAMES = ['kMandant', 'cName', 'cDB'];
	const COLUMN_TYPES = ['kMandant' => 'int', 'cName' => 'varchar', 'cDB' => 'varchar'];

	/** @var int kMandant */
	public $kMandant;

	/** @var string cName */
	public $cName;

	/** @var string cDB */
	public $cDB;
}
