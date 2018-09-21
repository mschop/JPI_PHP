<?php

namespace App\Schema;

class tLieferschein
{
	const TABLE_NAME = 'tLieferschein';
	const kLieferschein = 'kLieferschein';
	const kBestellung = 'kBestellung';
	const kBenutzer = 'kBenutzer';
	const cLieferscheinNr = 'cLieferscheinNr';
	const cHinweis = 'cHinweis';
	const dMailVersand = 'dMailVersand';
	const dErstellt = 'dErstellt';
	const dGedruckt = 'dGedruckt';
	const nFulfillment = 'nFulfillment';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kSessionId = 'kSessionId';
	const COLUMN_NAMES = [
		'kLieferschein',
		'kBestellung',
		'kBenutzer',
		'cLieferscheinNr',
		'cHinweis',
		'dMailVersand',
		'dErstellt',
		'dGedruckt',
		'nFulfillment',
		'kLieferantenBestellung',
		'kSessionId',
	];
	const COLUMN_TYPES = [
		'kLieferschein' => 'int',
		'kBestellung' => 'int',
		'kBenutzer' => 'int',
		'cLieferscheinNr' => 'varchar',
		'cHinweis' => 'varchar',
		'dMailVersand' => 'datetime',
		'dErstellt' => 'datetime',
		'dGedruckt' => 'datetime',
		'nFulfillment' => 'int',
		'kLieferantenBestellung' => 'int',
		'kSessionId' => 'int',
	];

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cLieferscheinNr */
	public $cLieferscheinNr;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string dMailVersand */
	public $dMailVersand;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dGedruckt */
	public $dGedruckt;

	/** @var int nFulfillment */
	public $nFulfillment;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kSessionId */
	public $kSessionId;
}
