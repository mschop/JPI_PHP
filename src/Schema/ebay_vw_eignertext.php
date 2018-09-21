<?php

namespace App\Schema;

class ebay_vw_eignertext
{
	const TABLE_NAME = 'ebay_vw_eignertext';
	const kEbay_vw_eignertext = 'kEbay_vw_eignertext';
	const cName = 'cName';
	const COLUMN_NAMES = ['kEbay_vw_eignertext', 'cName'];
	const COLUMN_TYPES = ['kEbay_vw_eignertext' => 'int', 'cName' => 'varchar'];

	/** @var int kEbay_vw_eignertext */
	public $kEbay_vw_eignertext;

	/** @var string cName */
	public $cName;
}
