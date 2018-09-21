<?php

namespace App\Schema;

class tLieferscheinPos
{
	const TABLE_NAME = 'tLieferscheinPos';
	const kLieferscheinPos = 'kLieferscheinPos';
	const kLieferschein = 'kLieferschein';
	const kBestellPos = 'kBestellPos';
	const fAnzahl = 'fAnzahl';
	const cHinweis = 'cHinweis';
	const COLUMN_NAMES = ['kLieferscheinPos', 'kLieferschein', 'kBestellPos', 'fAnzahl', 'cHinweis'];
	const COLUMN_TYPES = [
		'kLieferscheinPos' => 'int',
		'kLieferschein' => 'int',
		'kBestellPos' => 'int',
		'fAnzahl' => 'decimal',
		'cHinweis' => 'varchar',
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
