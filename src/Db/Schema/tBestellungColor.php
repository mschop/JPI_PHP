<?php

namespace App\Db\Schema;

class tBestellungColor
{
	const TABLE_NAME = 'tBestellungColor';
	const kColor = 'kColor';
	const cName = 'cName';
	const COLUMN_NAMES = ['kColor', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kColor' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kColor */
	public $kColor;

	/** @var string cName */
	public $cName;
}
