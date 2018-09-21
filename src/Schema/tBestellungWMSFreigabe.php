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
	const COLUMN_NAMES = [
		'kBestellungWMSFreigabe',
		'kBestellung',
		'dZeitstempel',
		'kBenutzer',
		'nTeillieferungErlaubt',
		'nVorkommissionieren',
		'nAktiv',
		'nSperre',
	];
	const COLUMN_TYPES = [
		'kBestellungWMSFreigabe' => 'int',
		'kBestellung' => 'int',
		'dZeitstempel' => 'datetime',
		'kBenutzer' => 'int',
		'nTeillieferungErlaubt' => 'int',
		'nVorkommissionieren' => 'int',
		'nAktiv' => 'int',
		'nSperre' => 'tinyint',
	];

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
