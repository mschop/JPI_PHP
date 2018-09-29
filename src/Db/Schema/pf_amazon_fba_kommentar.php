<?php

namespace App\Db\Schema;

class pf_amazon_fba_kommentar
{
	const TABLE_NAME = 'pf_amazon_fba_kommentar';
	const kUser = 'kUser';
	const kSprache = 'kSprache';
	const cFBAKommentar = 'cFBAKommentar';
	const COLUMN_NAMES = ['kUser', 'kSprache', 'cFBAKommentar'];
	const COLUMN_DEFINITIONS = [
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFBAKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kUser */
	public $kUser;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cFBAKommentar */
	public $cFBAKommentar;
}
