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
