<?php

namespace App\Schema;

class tAbrechnung
{
	const TABLE_NAME = 'tAbrechnung';
	const kAbrechnung = 'kAbrechnung';
	const kBenutzer = 'kBenutzer';
	const kKunde = 'kKunde';
	const kFirma = 'kFirma';
	const kFulfillmentLieferant = 'kFulfillmentLieferant';
	const cAbrechnungsNummer = 'cAbrechnungsNummer';
	const cAnmerkung = 'cAnmerkung';
	const dAbrechnungVon = 'dAbrechnungVon';
	const dAbrechnungBis = 'dAbrechnungBis';
	const kBestellung = 'kBestellung';
	const dAuftragErstellt = 'dAuftragErstellt';
	const nStorno = 'nStorno';

	/** @var int kAbrechnung */
	public $kAbrechnung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kFulfillmentLieferant */
	public $kFulfillmentLieferant;

	/** @var string cAbrechnungsNummer */
	public $cAbrechnungsNummer;

	/** @var resource cAnmerkung */
	public $cAnmerkung;

	/** @var string dAbrechnungVon */
	public $dAbrechnungVon;

	/** @var string dAbrechnungBis */
	public $dAbrechnungBis;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string dAuftragErstellt */
	public $dAuftragErstellt;

	/** @var int nStorno */
	public $nStorno;
}
