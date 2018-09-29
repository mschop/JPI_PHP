<?php

namespace App\Db\Schema;

class tBuchungsArt
{
	const TABLE_NAME = 'tBuchungsArt';
	const kBuchungsart = 'kBuchungsart';
	const cName = 'cName';
	const COLUMN_NAMES = ['kBuchungsart', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kBuchungsart' => [
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

	/** @var int kBuchungsart */
	public $kBuchungsart;

	/** @var string cName */
	public $cName;
}
