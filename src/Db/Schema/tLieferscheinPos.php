<?php

namespace App\Db\Schema;

class tLieferscheinPos
{
	const TABLE_NAME = 'tLieferscheinPos';
	const kLieferscheinPos = 'kLieferscheinPos';
	const kLieferschein = 'kLieferschein';
	const kBestellPos = 'kBestellPos';
	const fAnzahl = 'fAnzahl';
	const cHinweis = 'cHinweis';
	const COLUMN_NAMES = ['kLieferscheinPos', 'kLieferschein', 'kBestellPos', 'fAnzahl', 'cHinweis'];
	const COLUMN_DEFINITIONS = [
		'kLieferscheinPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string cHinweis */
	public $cHinweis;
}
