<?php

namespace App\Schema;

class tVersandPos
{
	const TABLE_NAME = 'tVersandPos';
	const kVersand = 'kVersand';
	const kLieferscheinPos = 'kLieferscheinPos';
	const fAnzahl = 'fAnzahl';

	/** @var int kVersand */
	public $kVersand;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var string fAnzahl */
	public $fAnzahl;
}
