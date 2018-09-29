<?php

namespace App\Db\Schema;

class tKategorieSperre
{
	const TABLE_NAME = 'tKategorieSperre';
	const kKategorie = 'kKategorie';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKategorie', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kKategorie' => [
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

	/** @var int kKategorie */
	public $kKategorie;

	/** @var string cName */
	public $cName;
}
