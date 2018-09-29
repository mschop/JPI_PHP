<?php

namespace App\Db\Schema;

class tVersandKonfiguration
{
	const TABLE_NAME = 'tVersandKonfiguration';
	const kVersandKonfiguration = 'kVersandKonfiguration';
	const cName = 'cName';
	const nArt = 'nArt';
	const nAnzahl = 'nAnzahl';
	const nAnzahlProPaket = 'nAnzahlProPaket';
	const kFormular = 'kFormular';
	const cText = 'cText';
	const nLandTyp = 'nLandTyp';
	const cLaenderListeISO = 'cLaenderListeISO';
	const fWertVon = 'fWertVon';
	const fWertBis = 'fWertBis';
	const kWarenlager = 'kWarenlager';
	const cVersandartListe = 'cVersandartListe';
	const fGewichtMax = 'fGewichtMax';
	const fGewichtMin = 'fGewichtMin';
	const cFirmen = 'cFirmen';
	const cKundengruppen = 'cKundengruppen';
	const cVersandklassen = 'cVersandklassen';
	const cZahlungsarten = 'cZahlungsarten';
	const cWarengruppen = 'cWarengruppen';
	const cPlattformen = 'cPlattformen';
	const cShops = 'cShops';
	const nEnthaeltArtAusWarengruppe = 'nEnthaeltArtAusWarengruppe';
	const nAlleOhneWarengruppe = 'nAlleOhneWarengruppe';
	const nAlleOhneVersandart = 'nAlleOhneVersandart';
	const nAlleOhneZahlungsart = 'nAlleOhneZahlungsart';
	const cBenutzer = 'cBenutzer';
	const nAuftragsArt = 'nAuftragsArt';
	const nVorgang = 'nVorgang';
	const nAusfuehrungBei = 'nAusfuehrungBei';
	const nDiffAdressRechnungLieferschein = 'nDiffAdressRechnungLieferschein';
	const nArtikelBreiteVon = 'nArtikelBreiteVon';
	const nArtikelBreiteBis = 'nArtikelBreiteBis';
	const nArtikelHoeheVon = 'nArtikelHoeheVon';
	const nArtikelHoeheBis = 'nArtikelHoeheBis';
	const nArtikelLaengeVon = 'nArtikelLaengeVon';
	const nArtikelLaengeBis = 'nArtikelLaengeBis';
	const nEigeneFelderFilter = 'nEigeneFelderFilter';
	const nArtikelZustandFilter = 'nArtikelZustandFilter';
	const COLUMN_NAMES = [
		'kVersandKonfiguration',
		'cName',
		'nArt',
		'nAnzahl',
		'nAnzahlProPaket',
		'kFormular',
		'cText',
		'nLandTyp',
		'cLaenderListeISO',
		'fWertVon',
		'fWertBis',
		'kWarenlager',
		'cVersandartListe',
		'fGewichtMax',
		'fGewichtMin',
		'cFirmen',
		'cKundengruppen',
		'cVersandklassen',
		'cZahlungsarten',
		'cWarengruppen',
		'cPlattformen',
		'cShops',
		'nEnthaeltArtAusWarengruppe',
		'nAlleOhneWarengruppe',
		'nAlleOhneVersandart',
		'nAlleOhneZahlungsart',
		'cBenutzer',
		'nAuftragsArt',
		'nVorgang',
		'nAusfuehrungBei',
		'nDiffAdressRechnungLieferschein',
		'nArtikelBreiteVon',
		'nArtikelBreiteBis',
		'nArtikelHoeheVon',
		'nArtikelHoeheBis',
		'nArtikelLaengeVon',
		'nArtikelLaengeBis',
		'nEigeneFelderFilter',
		'nArtikelZustandFilter',
	];
	const COLUMN_DEFINITIONS = [
		'kVersandKonfiguration' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 60,
			'characterSetName' => 'iso_1',
		],
		'nArt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahl' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlProPaket' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormular' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'nLandTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLaenderListeISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'fWertVon' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fWertBis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVersandartListe' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fGewichtMax' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGewichtMin' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFirmen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'cKundengruppen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'cVersandklassen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'cZahlungsarten' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'cWarengruppen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'cPlattformen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'cShops' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'nEnthaeltArtAusWarengruppe' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAlleOhneWarengruppe' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAlleOhneVersandart' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAlleOhneZahlungsart' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBenutzer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'nAuftragsArt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVorgang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAusfuehrungBei' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDiffAdressRechnungLieferschein' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtikelBreiteVon' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtikelBreiteBis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtikelHoeheVon' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtikelHoeheBis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtikelLaengeVon' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtikelLaengeBis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEigeneFelderFilter' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nArtikelZustandFilter' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kVersandKonfiguration */
	public $kVersandKonfiguration;

	/** @var string cName */
	public $cName;

	/** @var int nArt */
	public $nArt;

	/** @var int nAnzahl */
	public $nAnzahl;

	/** @var int nAnzahlProPaket */
	public $nAnzahlProPaket;

	/** @var int kFormular */
	public $kFormular;

	/** @var string cText */
	public $cText;

	/** @var int nLandTyp */
	public $nLandTyp;

	/** @var string cLaenderListeISO */
	public $cLaenderListeISO;

	/** @var string fWertVon */
	public $fWertVon;

	/** @var string fWertBis */
	public $fWertBis;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var string cVersandartListe */
	public $cVersandartListe;

	/** @var string fGewichtMax */
	public $fGewichtMax;

	/** @var string fGewichtMin */
	public $fGewichtMin;

	/** @var string cFirmen */
	public $cFirmen;

	/** @var string cKundengruppen */
	public $cKundengruppen;

	/** @var string cVersandklassen */
	public $cVersandklassen;

	/** @var string cZahlungsarten */
	public $cZahlungsarten;

	/** @var string cWarengruppen */
	public $cWarengruppen;

	/** @var string cPlattformen */
	public $cPlattformen;

	/** @var string cShops */
	public $cShops;

	/** @var int nEnthaeltArtAusWarengruppe */
	public $nEnthaeltArtAusWarengruppe;

	/** @var int nAlleOhneWarengruppe */
	public $nAlleOhneWarengruppe;

	/** @var int nAlleOhneVersandart */
	public $nAlleOhneVersandart;

	/** @var int nAlleOhneZahlungsart */
	public $nAlleOhneZahlungsart;

	/** @var string cBenutzer */
	public $cBenutzer;

	/** @var int nAuftragsArt */
	public $nAuftragsArt;

	/** @var int nVorgang */
	public $nVorgang;

	/** @var int nAusfuehrungBei */
	public $nAusfuehrungBei;

	/** @var int nDiffAdressRechnungLieferschein */
	public $nDiffAdressRechnungLieferschein;

	/** @var int nArtikelBreiteVon */
	public $nArtikelBreiteVon;

	/** @var int nArtikelBreiteBis */
	public $nArtikelBreiteBis;

	/** @var int nArtikelHoeheVon */
	public $nArtikelHoeheVon;

	/** @var int nArtikelHoeheBis */
	public $nArtikelHoeheBis;

	/** @var int nArtikelLaengeVon */
	public $nArtikelLaengeVon;

	/** @var int nArtikelLaengeBis */
	public $nArtikelLaengeBis;

	/** @var int nEigeneFelderFilter */
	public $nEigeneFelderFilter;

	/** @var int nArtikelZustandFilter */
	public $nArtikelZustandFilter;
}
