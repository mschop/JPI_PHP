<?php

namespace App\Schema;

class tBestellungColor
{
	const TABLE_NAME = 'tBestellungColor';
	const kColor = 'kColor';
	const cName = 'cName';
	const COLUMN_NAMES = ['kColor', 'cName'];
	const COLUMN_TYPES = ['kColor' => 'int', 'cName' => 'varchar'];

	/** @var int kColor */
	public $kColor;

	/** @var string cName */
	public $cName;
}
