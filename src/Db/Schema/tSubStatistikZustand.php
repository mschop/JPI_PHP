<?php

namespace App\Db\Schema;

class tSubStatistikZustand
{
	const TABLE_NAME = 'tSubStatistikZustand';
	const kBenutzer = 'kBenutzer';
	const kSubStatistik = 'kSubStatistik';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kBenutzer', 'kSubStatistik', 'cWert'];
	const COLUMN_DEFINITIONS = [
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSubStatistik' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kSubStatistik */
	public $kSubStatistik;

	/** @var string cWert */
	public $cWert;
}
