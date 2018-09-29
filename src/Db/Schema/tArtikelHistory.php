<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kArtikelHistory',
		'kWarenLagerPlatz',
		'kArtikel',
		'fAnzahl',
		'dGebucht',
		'kBenutzer',
		'kWarenEingang',
		'kBestellPos',
		'kGutschriftPos',
		'fEKNetto',
		'cKommentar',
		'kPlattform',
		'fLagerBestandGesamt',
		'fVerfuegbar',
		'fReserviert',
		'kBuchungsart',
		'fLagerBestand',
		'kLieferscheinPos',
		'kLieferantenBestellungPos',
		'cLieferscheinNr',
		'cChargenNr',
		'dMHD',
	];
	const COLUMN_DEFINITIONS = [
		'kArtikelHistory' => [
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
			'isNullable' => true,
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
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dGebucht' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
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
		'kWarenEingang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kGutschriftPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fEKNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
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
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLagerBestandGesamt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVerfuegbar' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fReserviert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBuchungsart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLagerBestand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferscheinPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
	];

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
