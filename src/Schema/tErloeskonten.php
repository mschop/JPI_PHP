<?php

namespace App\Schema;

class tErloeskonten
{
	const TABLE_NAME = 'tErloeskonten';
	const kErloeskonten = 'kErloeskonten';
	const cName = 'cName';
	const nType = 'nType';
	const COLUMN_NAMES = ['kErloeskonten', 'cName', 'nType'];
	const COLUMN_TYPES = ['kErloeskonten' => 'int', 'cName' => 'varchar', 'nType' => 'tinyint'];

	/** @var int kErloeskonten */
	public $kErloeskonten;

	/** @var string cName */
	public $cName;

	/** @var int nType */
	public $nType;
}
