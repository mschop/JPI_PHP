<?php

namespace App\Schema;

class tAbrechnungLagerplatzPreview
{
	const TABLE_NAME = 'tAbrechnungLagerplatzPreview';
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
	const cSessionId = 'cSessionId';
	const dZeitstempel = 'dZeitstempel';

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

	/** @var string cSessionId */
	public $cSessionId;

	/** @var string dZeitstempel */
	public $dZeitstempel;
}
