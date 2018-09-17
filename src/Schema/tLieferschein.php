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
