<?php

namespace App\Db\Schema;

class pf_listview_colors
{
	const TABLE_NAME = 'pf_listview_colors';
	const nColorId = 'nColorId';
	const nSubColorId = 'nSubColorId';
	const nListViewId = 'nListViewId';
	const cRGB = 'cRGB';
	const COLUMN_NAMES = ['nColorId', 'nSubColorId', 'nListViewId', 'cRGB'];
	const COLUMN_DEFINITIONS = [
		'nColorId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSubColorId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nListViewId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRGB' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int nColorId */
	public $nColorId;

	/** @var int nSubColorId */
	public $nSubColorId;

	/** @var int nListViewId */
	public $nListViewId;

	/** @var string cRGB */
	public $cRGB;
}
