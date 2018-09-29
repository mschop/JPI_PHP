<?php

namespace App\Db\Schema;

class tB2BArtikel
{
	const TABLE_NAME = 'tB2BArtikel';
	const kB2BArtikel = 'kB2BArtikel';
	const kArtikel = 'kArtikel';
	const cJpid = 'cJpid';
	const COLUMN_NAMES = ['kB2BArtikel', 'kArtikel', 'cJpid'];
	const COLUMN_DEFINITIONS = [
		'kB2BArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cJpid' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kB2BArtikel */
	public $kB2BArtikel;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cJpid */
	public $cJpid;
}
