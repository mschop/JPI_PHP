<?php

namespace App\Schema;

class tAbrechnungLagerplatz
{
	const TABLE_NAME = 'tAbrechnungLagerplatz';
	const kAbrechnungLagerplatz = 'kAbrechnungLagerplatz';
	const kLieferant = 'kLieferant';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kWarenLagerPlatzTyp = 'kWarenLagerPlatzTyp';
	const kWMSLagerBereich = 'kWMSLagerBereich';
	const kWarenlager = 'kWarenlager';
	const nModus = 'nModus';
	const nLagerkostenBerechnung = 'nLagerkostenBerechnung';
	const kArtikel = 'kArtikel';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = [
		'kAbrechnungLagerplatz',
		'kLieferant',
		'kWarenLagerPlatz',
		'kWarenLagerPlatzTyp',
		'kWMSLagerBereich',
		'kWarenlager',
		'nModus',
		'nLagerkostenBerechnung',
		'kArtikel',
		'kBenutzer',
	];
	const COLUMN_TYPES = [
		'kAbrechnungLagerplatz' => 'int',
		'kLieferant' => 'int',
		'kWarenLagerPlatz' => 'int',
		'kWarenLagerPlatzTyp' => 'int',
		'kWMSLagerBereich' => 'int',
		'kWarenlager' => 'int',
		'nModus' => 'int',
		'nLagerkostenBerechnung' => 'int',
		'kArtikel' => 'int',
		'kBenutzer' => 'int',
	];

	/** @var int kAbrechnungLagerplatz */
	public $kAbrechnungLagerplatz;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kWarenLagerPlatzTyp */
	public $kWarenLagerPlatzTyp;

	/** @var int kWMSLagerBereich */
	public $kWMSLagerBereich;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int nModus */
	public $nModus;

	/** @var int nLagerkostenBerechnung */
	public $nLagerkostenBerechnung;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kBenutzer */
	public $kBenutzer;
}
