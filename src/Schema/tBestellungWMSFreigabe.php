<?php

namespace App\Schema;

class tBestellungWMSFreigabe
{
	const TABLE_NAME = 'tBestellungWMSFreigabe';
	const kBestellungWMSFreigabe = 'kBestellungWMSFreigabe';
	const kBestellung = 'kBestellung';
	const dZeitstempel = 'dZeitstempel';
	const kBenutzer = 'kBenutzer';
	const nTeillieferungErlaubt = 'nTeillieferungErlaubt';
	const nVorkommissionieren = 'nVorkommissionieren';
	const nAktiv = 'nAktiv';
	const nSperre = 'nSperre';

	/** @var int kBestellungWMSFreigabe */
	public $kBestellungWMSFreigabe;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nTeillieferungErlaubt */
	public $nTeillieferungErlaubt;

	/** @var int nVorkommissionieren */
	public $nVorkommissionieren;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int nSperre */
	public $nSperre;
}
