<?php

namespace App\Schema;

class tVersandPos
{
	const TABLE_NAME = 'tVersandPos';
	const kVersand = 'kVersand';
	const kLieferscheinPos = 'kLieferscheinPos';
	const fAnzahl = 'fAnzahl';
	const COLUMN_NAMES = ['kVersand', 'kLieferscheinPos', 'fAnzahl'];
	const COLUMN_TYPES = ['kVersand' => 'int', 'kLieferscheinPos' => 'int', 'fAnzahl' => 'decimal'];

	/** @var int kVersand */
	public $kVersand;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var string fAnzahl */
	public $fAnzahl;
}
