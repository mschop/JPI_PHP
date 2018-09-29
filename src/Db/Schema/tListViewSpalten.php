<?php

namespace App\Db\Schema;

class tListViewSpalten
{
	const TABLE_NAME = 'tListViewSpalten';
	const kListView = 'kListView';
	const nPos = 'nPos';
	const cWert = 'cWert';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = ['kListView', 'nPos', 'cWert', 'kBenutzer'];
	const COLUMN_DEFINITIONS = [
		'kListView' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kListView */
	public $kListView;

	/** @var int nPos */
	public $nPos;

	/** @var string cWert */
	public $cWert;

	/** @var int kBenutzer */
	public $kBenutzer;
}
