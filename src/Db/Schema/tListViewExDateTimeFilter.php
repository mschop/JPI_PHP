<?php

namespace App\Db\Schema;

class tListViewExDateTimeFilter
{
	const TABLE_NAME = 'tListViewExDateTimeFilter';
	const nListViewID = 'nListViewID';
	const dValue = 'dValue';
	const nSelectedIndex = 'nSelectedIndex';
	const COLUMN_NAMES = ['nListViewID', 'dValue', 'nSelectedIndex'];
	const COLUMN_DEFINITIONS = [
		'nListViewID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dValue' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSelectedIndex' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int nListViewID */
	public $nListViewID;

	/** @var string dValue */
	public $dValue;

	/** @var int nSelectedIndex */
	public $nSelectedIndex;
}
