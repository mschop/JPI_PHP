<?php

namespace App\Db\Schema;

class tErloeskonten
{
	const TABLE_NAME = 'tErloeskonten';
	const kErloeskonten = 'kErloeskonten';
	const cName = 'cName';
	const nType = 'nType';
	const COLUMN_NAMES = ['kErloeskonten', 'cName', 'nType'];
	const COLUMN_DEFINITIONS = [
		'kErloeskonten' => [
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
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'nType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kErloeskonten */
	public $kErloeskonten;

	/** @var string cName */
	public $cName;

	/** @var int nType */
	public $nType;
}
