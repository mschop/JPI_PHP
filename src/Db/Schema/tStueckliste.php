<?php

namespace App\Db\Schema;

class tStueckliste
{
	const TABLE_NAME = 'tStueckliste';
	const kStueckliste = 'kStueckliste';
	const kArtikel = 'kArtikel';
	const fAnzahl = 'fAnzahl';
	const COLUMN_NAMES = ['kStueckliste', 'kArtikel', 'fAnzahl'];
	const COLUMN_DEFINITIONS = [
		'kStueckliste' => [
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
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kStueckliste */
	public $kStueckliste;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fAnzahl */
	public $fAnzahl;
}
