<?php

namespace App\Schema;

class tRMRetoure
{
	const TABLE_NAME = 'tRMRetoure';
	const kRMRetoure = 'kRMRetoure';
	const kRMStatus = 'kRMStatus';
	const kKunde = 'kKunde';
	const kBenutzer = 'kBenutzer';
	const cRetoureNr = 'cRetoureNr';
	const cAnsprechpartner = 'cAnsprechpartner';
	const dErstellt = 'dErstellt';
	const cKommentarExtern = 'cKommentarExtern';
	const kRMRetoureAbholAdresse = 'kRMRetoureAbholAdresse';
	const kWarenlager = 'kWarenlager';
	const kFirma = 'kFirma';
	const nHerkunft = 'nHerkunft';
	const cKommentarIntern = 'cKommentarIntern';
	const fKorrekturBetrag = 'fKorrekturBetrag';
	const nVersandkostenErstatten = 'nVersandkostenErstatten';
	const cKorrekturBetragKommentar = 'cKorrekturBetragKommentar';
	const kBestellungUmtausch = 'kBestellungUmtausch';
	const kGutschrift = 'kGutschrift';
	const kBestellung = 'kBestellung';
	const cFfnReturnId = 'cFfnReturnId';
	const cExternalNumber = 'cExternalNumber';

	/** @var int kRMRetoure */
	public $kRMRetoure;

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cRetoureNr */
	public $cRetoureNr;

	/** @var string cAnsprechpartner */
	public $cAnsprechpartner;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cKommentarExtern */
	public $cKommentarExtern;

	/** @var int kRMRetoureAbholAdresse */
	public $kRMRetoureAbholAdresse;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int kFirma */
	public $kFirma;

	/** @var int nHerkunft */
	public $nHerkunft;

	/** @var string cKommentarIntern */
	public $cKommentarIntern;

	/** @var string fKorrekturBetrag */
	public $fKorrekturBetrag;

	/** @var int nVersandkostenErstatten */
	public $nVersandkostenErstatten;

	/** @var string cKorrekturBetragKommentar */
	public $cKorrekturBetragKommentar;

	/** @var int kBestellungUmtausch */
	public $kBestellungUmtausch;

	/** @var int kGutschrift */
	public $kGutschrift;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string cFfnReturnId */
	public $cFfnReturnId;

	/** @var string cExternalNumber */
	public $cExternalNumber;
}
