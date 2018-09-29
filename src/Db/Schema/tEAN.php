<?php

namespace App\Db\Schema;

class tEAN
{
	const TABLE_NAME = 'tEAN';
	const cEAN = 'cEAN';
	const dImportdatum = 'dImportdatum';
	const COLUMN_NAMES = ['cEAN', 'dImportdatum'];
	const COLUMN_DEFINITIONS = [
		'cEAN' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dImportdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cEAN */
	public $cEAN;

	/** @var string dImportdatum */
	public $dImportdatum;
}
