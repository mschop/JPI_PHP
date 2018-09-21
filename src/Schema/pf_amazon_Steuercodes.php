<?php

namespace App\Schema;

class pf_amazon_Steuercodes
{
	const TABLE_NAME = 'pf_amazon_Steuercodes';
	const kSteuercode = 'kSteuercode';
	const cName = 'cName';
	const COLUMN_NAMES = ['kSteuercode', 'cName'];
	const COLUMN_TYPES = ['kSteuercode' => 'int', 'cName' => 'varchar'];

	/** @var int kSteuercode */
	public $kSteuercode;

	/** @var string cName */
	public $cName;
}
