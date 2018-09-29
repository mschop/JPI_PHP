<?php

namespace App\Db\Schema;

class tVersandKonfigurationArtikelZustand
{
	const TABLE_NAME = 'tVersandKonfigurationArtikelZustand';
	const kVersandKonfiguration = 'kVersandKonfiguration';
	const kZustand = 'kZustand';
	const COLUMN_NAMES = ['kVersandKonfiguration', 'kZustand'];
	const COLUMN_DEFINITIONS = [
		'kVersandKonfiguration' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZustand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kVersandKonfiguration */
	public $kVersandKonfiguration;

	/** @var int kZustand */
	public $kZustand;
}
