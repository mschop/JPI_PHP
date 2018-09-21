<?php

namespace App\Schema;

class tGutschriftSperre
{
	const TABLE_NAME = 'tGutschriftSperre';
	const kGutschrift = 'kGutschrift';
	const cName = 'cName';
	const COLUMN_NAMES = ['kGutschrift', 'cName'];
	const COLUMN_TYPES = ['kGutschrift' => 'int', 'cName' => 'varchar'];

	/** @var int kGutschrift */
	public $kGutschrift;

	/** @var string cName */
	public $cName;
}
