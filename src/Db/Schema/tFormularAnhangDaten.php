<?php

namespace App\Db\Schema;

class tFormularAnhangDaten
{
	const TABLE_NAME = 'tFormularAnhangDaten';
	const kFormularAnhangDaten = 'kFormularAnhangDaten';
	const cDateiname = 'cDateiname';
	const bSHA1 = 'bSHA1';
	const bDaten = 'bDaten';
	const COLUMN_NAMES = ['kFormularAnhangDaten', 'cDateiname', 'bSHA1', 'bDaten'];
	const COLUMN_DEFINITIONS = [
		'kFormularAnhangDaten' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDateiname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'bSHA1' => [
			'type' => 'binary',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => null,
		],
		'bDaten' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
	];

	/** @var int kFormularAnhangDaten */
	public $kFormularAnhangDaten;

	/** @var string cDateiname */
	public $cDateiname;

	/** @var resource bSHA1 */
	public $bSHA1;

	/** @var resource bDaten */
	public $bDaten;
}
