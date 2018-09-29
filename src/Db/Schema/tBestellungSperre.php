<?php

namespace App\Db\Schema;

class tBestellungSperre
{
	const TABLE_NAME = 'tBestellungSperre';
	const kBestellung = 'kBestellung';
	const cName = 'cName';
	const COLUMN_NAMES = ['kBestellung', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kBestellung' => [
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

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string cName */
	public $cName;
}
