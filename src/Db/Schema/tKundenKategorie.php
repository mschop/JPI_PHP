<?php

namespace App\Db\Schema;

class tKundenKategorie
{
	const TABLE_NAME = 'tKundenKategorie';
	const kKundenKategorie = 'kKundenKategorie';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKundenKategorie', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kKundenKategorie' => [
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
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kKundenKategorie */
	public $kKundenKategorie;

	/** @var string cName */
	public $cName;
}
