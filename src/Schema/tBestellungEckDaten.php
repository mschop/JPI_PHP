<?php

namespace App\Schema;

class tBestellungEckDaten
{
	const TABLE_NAME = 'tBestellungEckDaten';
	const kBestellung = 'kBestellung';
	const fWert = 'fWert';
	const fZahlung = 'fZahlung';
	const fGutschrift = 'fGutschrift';
	const fGutschein = 'fGutschein';
	const fFaktor = 'fFaktor';
	const cWaehrung = 'cWaehrung';
	const COLUMN_NAMES = ['kBestellung', 'fWert', 'fZahlung', 'fGutschrift', 'fGutschein', 'fFaktor', 'cWaehrung'];
	const COLUMN_TYPES = [
		'kBestellung' => 'int',
		'fWert' => 'decimal',
		'fZahlung' => 'decimal',
		'fGutschrift' => 'decimal',
		'fGutschein' => 'decimal',
		'fFaktor' => 'decimal',
		'cWaehrung' => 'varchar',
	];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string fWert */
	public $fWert;

	/** @var string fZahlung */
	public $fZahlung;

	/** @var string fGutschrift */
	public $fGutschrift;

	/** @var string fGutschein */
	public $fGutschein;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var string cWaehrung */
	public $cWaehrung;
}
