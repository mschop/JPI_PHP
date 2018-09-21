<?php

namespace App\Schema;

class tListViewExDateTimeFilter
{
	const TABLE_NAME = 'tListViewExDateTimeFilter';
	const nListViewID = 'nListViewID';
	const dValue = 'dValue';
	const nSelectedIndex = 'nSelectedIndex';
	const COLUMN_NAMES = ['nListViewID', 'dValue', 'nSelectedIndex'];
	const COLUMN_TYPES = ['nListViewID' => 'int', 'dValue' => 'datetime', 'nSelectedIndex' => 'int'];

	/** @var int nListViewID */
	public $nListViewID;

	/** @var string dValue */
	public $dValue;

	/** @var int nSelectedIndex */
	public $nSelectedIndex;
}
