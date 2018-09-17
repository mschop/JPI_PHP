<?php

namespace App\Schema;

class tArtikelHistory
{
	const TABLE_NAME = 'tArtikelHistory';
	const kArtikelHistory = 'kArtikelHistory';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kArtikel = 'kArtikel';
	const fAnzahl = 'fAnzahl';
	const dGebucht = 'dGebucht';
	const kBenutzer = 'kBenutzer';
	const kWarenEingang = 'kWarenEingang';
	const kBestellPos = 'kBestellPos';
	const kGutschriftPos = 'kGutschriftPos';
	const fEKNetto = 'fEKNetto';
	const cKommentar = 'cKommentar';
	const kPlattform = 'kPlattform';
	const fLagerBestandGesamt = 'fLagerBestandGesamt';
	const fVerfuegbar = 'fVerfuegbar';
	const fReserviert = 'fReserviert';
	const kBuchungsart = 'kBuchungsart';
	const fLagerBestand = 'fLagerBestand';
	const kLieferscheinPos = 'kLieferscheinPos';
	const kLieferantenBestellungPos = 'kLieferantenBestellungPos';
	const cLieferscheinNr = 'cLieferscheinNr';
	const cChargenNr = 'cChargenNr';
	const dMHD = 'dMHD';

	/** @var int kArtikelHistory */
	public $kArtikelHistory;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string dGebucht */
	public $dGebucht;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kWarenEingang */
	public $kWarenEingang;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kGutschriftPos */
	public $kGutschriftPos;

	/** @var string fEKNetto */
	public $fEKNetto;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string fLagerBestandGesamt */
	public $fLagerBestandGesamt;

	/** @var string fVerfuegbar */
	public $fVerfuegbar;

	/** @var string fReserviert */
	public $fReserviert;

	/** @var int kBuchungsart */
	public $kBuchungsart;

	/** @var string fLagerBestand */
	public $fLagerBestand;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var int kLieferantenBestellungPos */
	public $kLieferantenBestellungPos;

	/** @var string cLieferscheinNr */
	public $cLieferscheinNr;

	/** @var string cChargenNr */
	public $cChargenNr;

	/** @var string dMHD */
	public $dMHD;
}
