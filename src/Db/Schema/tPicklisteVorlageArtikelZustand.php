<?php

namespace App\Db\Schema;

class tPicklisteVorlageArtikelZustand
{
	const TABLE_NAME = 'tPicklisteVorlageArtikelZustand';
	const kPicklisteVorlage = 'kPicklisteVorlage';
	const kZustand = 'kZustand';
	const COLUMN_NAMES = ['kPicklisteVorlage', 'kZustand'];
	const COLUMN_DEFINITIONS = [
		'kPicklisteVorlage' => [
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

	/** @var int kPicklisteVorlage */
	public $kPicklisteVorlage;

	/** @var int kZustand */
	public $kZustand;
}
