<?php

namespace App\Schema;

class tWarenLagerEingang
{
	const TABLE_NAME = 'tWarenLagerEingang';
	const kWarenLagerEingang = 'kWarenLagerEingang';
	const kArtikel = 'kArtikel';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kLieferantenBestellungPos = 'kLieferantenBestellungPos';
	const kBenutzer = 'kBenutzer';
	const fAnzahl = 'fAnzahl';
	const fEKEinzel = 'fEKEinzel';
	const cLieferscheinNr = 'cLieferscheinNr';
	const cChargenNr = 'cChargenNr';
	const dMHD = 'dMHD';
	const dErstellt = 'dErstellt';
	const dGeliefertAM = 'dGeliefertAM';
	const cKommentar = 'cKommentar';
	const kGutschriftPos = 'kGutschriftPos';
	const kWarenLagerAusgang = 'kWarenLagerAusgang';
	const kLHM = 'kLHM';
	const fAnzahlAktuell = 'fAnzahlAktuell';
	const fAnzahlReserviertPickpos = 'fAnzahlReserviertPickpos';
	const kSessionID = 'kSessionID';
	const kWarenLagerEingang_Ursprung = 'kWarenLagerEingang_Ursprung';
	const kBuchungsart = 'kBuchungsart';
	const kBestellPosUmlagerung = 'kBestellPosUmlagerung';
	const kRMRetourePos = 'kRMRetourePos';

	/** @var int kWarenLagerEingang */
	public $kWarenLagerEingang;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kLieferantenBestellungPos */
	public $kLieferantenBestellungPos;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fEKEinzel */
	public $fEKEinzel;

	/** @var string cLieferscheinNr */
	public $cLieferscheinNr;

	/** @var string cChargenNr */
	public $cChargenNr;

	/** @var string dMHD */
	public $dMHD;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dGeliefertAM */
	public $dGeliefertAM;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var int kGutschriftPos */
	public $kGutschriftPos;

	/** @var int kWarenLagerAusgang */
	public $kWarenLagerAusgang;

	/** @var int kLHM */
	public $kLHM;

	/** @var string fAnzahlAktuell */
	public $fAnzahlAktuell;

	/** @var string fAnzahlReserviertPickpos */
	public $fAnzahlReserviertPickpos;

	/** @var int kSessionID */
	public $kSessionID;

	/** @var int kWarenLagerEingang_Ursprung */
	public $kWarenLagerEingang_Ursprung;

	/** @var int kBuchungsart */
	public $kBuchungsart;

	/** @var int kBestellPosUmlagerung */
	public $kBestellPosUmlagerung;

	/** @var int kRMRetourePos */
	public $kRMRetourePos;
}
