<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kWarenLagerEingang',
		'kArtikel',
		'kWarenLagerPlatz',
		'kLieferantenBestellungPos',
		'kBenutzer',
		'fAnzahl',
		'fEKEinzel',
		'cLieferscheinNr',
		'cChargenNr',
		'dMHD',
		'dErstellt',
		'dGeliefertAM',
		'cKommentar',
		'kGutschriftPos',
		'kWarenLagerAusgang',
		'kLHM',
		'fAnzahlAktuell',
		'fAnzahlReserviertPickpos',
		'kSessionID',
		'kWarenLagerEingang_Ursprung',
		'kBuchungsart',
		'kBestellPosUmlagerung',
		'kRMRetourePos',
	];
	const COLUMN_DEFINITIONS = [
		'kWarenLagerEingang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fEKEinzel' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLieferscheinNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cChargenNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dMHD' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dGeliefertAM' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kGutschriftPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerAusgang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLHM' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahlAktuell' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahlReserviertPickpos' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSessionID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerEingang_Ursprung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBuchungsart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellPosUmlagerung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMRetourePos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

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
