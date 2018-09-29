<?php

namespace App\Db\Schema;

class tGutschriftSperre
{
	const TABLE_NAME = 'tGutschriftSperre';
	const kGutschrift = 'kGutschrift';
	const cName = 'cName';
	const COLUMN_NAMES = ['kGutschrift', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kGutschrift' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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

	/** @var int kGutschrift */
	public $kGutschrift;

	/** @var string cName */
	public $cName;
}
