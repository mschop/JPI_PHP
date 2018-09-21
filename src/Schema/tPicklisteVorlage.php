<?php

namespace App\Schema;

class tPicklisteVorlage
{
	const TABLE_NAME = 'tPicklisteVorlage';
	const kPicklisteVorlage = 'kPicklisteVorlage';
	const kPickliste = 'kPickliste';
	const nIstVorlage = 'nIstVorlage';
	const nAnzahlBestellungen = 'nAnzahlBestellungen';
	const kBestellNr = 'kBestellNr';
	const nAnzahlArtikelAuftragMax = 'nAnzahlArtikelAuftragMax';
	const nAnzahlArtikelAuftragMin = 'nAnzahlArtikelAuftragMin';
	const nTeillieferungen = 'nTeillieferungen';
	const fTeillieferungenWert = 'fTeillieferungenWert';
	const nBoxenVon = 'nBoxenVon';
	const nBoxenBis = 'nBoxenBis';
	const nEinArtikelPickliste = 'nEinArtikelPickliste';
	const fGewichtVon = 'fGewichtVon';
	const fGewichtBis = 'fGewichtBis';
	const cWarenLagerPlatzVon = 'cWarenLagerPlatzVon';
	const cWarenLagerPlatzBis = 'cWarenLagerPlatzBis';
	const nSortierung = 'nSortierung';
	const cKommentar = 'cKommentar';
	const dVonDatum = 'dVonDatum';
	const dBisDatum = 'dBisDatum';
	const kBenutzer = 'kBenutzer';
	const dAngelegt = 'dAngelegt';
	const cVersandartNr = 'cVersandartNr';
	const cShops = 'cShops';
	const cPlattformen = 'cPlattformen';
	const kWarenlager = 'kWarenlager';
	const cName = 'cName';
	const nWEPlatzReservieren = 'nWEPlatzReservieren';
	const nQuickSlot = 'nQuickSlot';
	const cWarengruppen = 'cWarengruppen';
	const kRollendeKommissionierungPickwagen = 'kRollendeKommissionierungPickwagen';
	const nBestellungWMSFreigabe = 'nBestellungWMSFreigabe';
	const nMaxAnzahlArtikel = 'nMaxAnzahlArtikel';
	const nLadenlokalEinbeziehen = 'nLadenlokalEinbeziehen';
	const nNichtBezahltVorkommissionieren = 'nNichtBezahltVorkommissionieren';
	const nNichtBezahltAutomatischAufVorkommi = 'nNichtBezahltAutomatischAufVorkommi';
	const cLieferlaender = 'cLieferlaender';
	const cLagerbereiche = 'cLagerbereiche';
	const fPreisAuftragMax = 'fPreisAuftragMax';
	const fPreisAuftragMin = 'fPreisAuftragMin';
	const cAuftragkennzeichnung = 'cAuftragkennzeichnung';
	const cFirmen = 'cFirmen';
	const cKundengruppen = 'cKundengruppen';
	const cVersandklassen = 'cVersandklassen';
	const cZahlungsarten = 'cZahlungsarten';
	const nEnthaeltArtAusWarengruppe = 'nEnthaeltArtAusWarengruppe';
	const nAlleOhneWarengruppe = 'nAlleOhneWarengruppe';
	const nAlleOhneVersandart = 'nAlleOhneVersandart';
	const nAlleOhneZahlungsart = 'nAlleOhneZahlungsart';
	const nDirektVerpacken = 'nDirektVerpacken';
	const cBenutzer = 'cBenutzer';
	const nSortenrein = 'nSortenrein';
	const nAuftragsArt = 'nAuftragsArt';
	const nMHDHandling = 'nMHDHandling';
	const nMHDMinHaltbarkeit = 'nMHDMinHaltbarkeit';
	const nArtikelBreiteVon = 'nArtikelBreiteVon';
	const nArtikelBreiteBis = 'nArtikelBreiteBis';
	const nArtikelHoeheVon = 'nArtikelHoeheVon';
	const nArtikelHoeheBis = 'nArtikelHoeheBis';
	const nArtikelLaengeVon = 'nArtikelLaengeVon';
	const nArtikelLaengeBis = 'nArtikelLaengeBis';
	const nMobilerPacktisch = 'nMobilerPacktisch';
	const nBoxenNurGanzeStuecklistenAufPL = 'nBoxenNurGanzeStuecklistenAufPL';
	const nAuftragsVolumenVon = 'nAuftragsVolumenVon';
	const nAuftragsVolumenBis = 'nAuftragsVolumenBis';
	const nOhneVolumenAusschliessen = 'nOhneVolumenAusschliessen';
	const nStuecklisteVonGleichenPlatz = 'nStuecklisteVonGleichenPlatz';
	const nMobileAppPicklistenVorlage = 'nMobileAppPicklistenVorlage';
	const nRetourenplatzReservieren = 'nRetourenplatzReservieren';
	const nNachschubPickenLast = 'nNachschubPickenLast';
	const nPlatzPrioBeruecksichtigen = 'nPlatzPrioBeruecksichtigen';
	const kPicklistenVorlageUrsprung = 'kPicklistenVorlageUrsprung';
	const nEnthaeltArtAusEigeneFelder = 'nEnthaeltArtAusEigeneFelder';
	const nEnthaeltArtArtikelZustand = 'nEnthaeltArtArtikelZustand';
	const nNurAusgewaehlteVersandartenAnzeigen = 'nNurAusgewaehlteVersandartenAnzeigen';
	const cAuftragsPrio = 'cAuftragsPrio';
	const nAngebrocheneBoxenImmerVervollstaendigen = 'nAngebrocheneBoxenImmerVervollstaendigen';
	const COLUMN_NAMES = [
		'kPicklisteVorlage',
		'kPickliste',
		'nIstVorlage',
		'nAnzahlBestellungen',
		'kBestellNr',
		'nAnzahlArtikelAuftragMax',
		'nAnzahlArtikelAuftragMin',
		'nTeillieferungen',
		'fTeillieferungenWert',
		'nBoxenVon',
		'nBoxenBis',
		'nEinArtikelPickliste',
		'fGewichtVon',
		'fGewichtBis',
		'cWarenLagerPlatzVon',
		'cWarenLagerPlatzBis',
		'nSortierung',
		'cKommentar',
		'dVonDatum',
		'dBisDatum',
		'kBenutzer',
		'dAngelegt',
		'cVersandartNr',
		'cShops',
		'cPlattformen',
		'kWarenlager',
		'cName',
		'nWEPlatzReservieren',
		'nQuickSlot',
		'cWarengruppen',
		'kRollendeKommissionierungPickwagen',
		'nBestellungWMSFreigabe',
		'nMaxAnzahlArtikel',
		'nLadenlokalEinbeziehen',
		'nNichtBezahltVorkommissionieren',
		'nNichtBezahltAutomatischAufVorkommi',
		'cLieferlaender',
		'cLagerbereiche',
		'fPreisAuftragMax',
		'fPreisAuftragMin',
		'cAuftragkennzeichnung',
		'cFirmen',
		'cKundengruppen',
		'cVersandklassen',
		'cZahlungsarten',
		'nEnthaeltArtAusWarengruppe',
		'nAlleOhneWarengruppe',
		'nAlleOhneVersandart',
		'nAlleOhneZahlungsart',
		'nDirektVerpacken',
		'cBenutzer',
		'nSortenrein',
		'nAuftragsArt',
		'nMHDHandling',
		'nMHDMinHaltbarkeit',
		'nArtikelBreiteVon',
		'nArtikelBreiteBis',
		'nArtikelHoeheVon',
		'nArtikelHoeheBis',
		'nArtikelLaengeVon',
		'nArtikelLaengeBis',
		'nMobilerPacktisch',
		'nBoxenNurGanzeStuecklistenAufPL',
		'nAuftragsVolumenVon',
		'nAuftragsVolumenBis',
		'nOhneVolumenAusschliessen',
		'nStuecklisteVonGleichenPlatz',
		'nMobileAppPicklistenVorlage',
		'nRetourenplatzReservieren',
		'nNachschubPickenLast',
		'nPlatzPrioBeruecksichtigen',
		'kPicklistenVorlageUrsprung',
		'nEnthaeltArtAusEigeneFelder',
		'nEnthaeltArtArtikelZustand',
		'nNurAusgewaehlteVersandartenAnzeigen',
		'cAuftragsPrio',
		'nAngebrocheneBoxenImmerVervollstaendigen',
	];
	const COLUMN_TYPES = [
		'kPicklisteVorlage' => 'int',
		'kPickliste' => 'int',
		'nIstVorlage' => 'tinyint',
		'nAnzahlBestellungen' => 'int',
		'kBestellNr' => 'int',
		'nAnzahlArtikelAuftragMax' => 'int',
		'nAnzahlArtikelAuftragMin' => 'int',
		'nTeillieferungen' => 'tinyint',
		'fTeillieferungenWert' => 'decimal',
		'nBoxenVon' => 'int',
		'nBoxenBis' => 'int',
		'nEinArtikelPickliste' => 'tinyint',
		'fGewichtVon' => 'decimal',
		'fGewichtBis' => 'decimal',
		'cWarenLagerPlatzVon' => 'varchar',
		'cWarenLagerPlatzBis' => 'varchar',
		'nSortierung' => 'tinyint',
		'cKommentar' => 'varchar',
		'dVonDatum' => 'datetime',
		'dBisDatum' => 'datetime',
		'kBenutzer' => 'int',
		'dAngelegt' => 'datetime',
		'cVersandartNr' => 'varchar',
		'cShops' => 'varchar',
		'cPlattformen' => 'varchar',
		'kWarenlager' => 'int',
		'cName' => 'varchar',
		'nWEPlatzReservieren' => 'tinyint',
		'nQuickSlot' => 'int',
		'cWarengruppen' => 'varchar',
		'kRollendeKommissionierungPickwagen' => 'int',
		'nBestellungWMSFreigabe' => 'tinyint',
		'nMaxAnzahlArtikel' => 'int',
		'nLadenlokalEinbeziehen' => 'tinyint',
		'nNichtBezahltVorkommissionieren' => 'tinyint',
		'nNichtBezahltAutomatischAufVorkommi' => 'tinyint',
		'cLieferlaender' => 'varchar',
		'cLagerbereiche' => 'varchar',
		'fPreisAuftragMax' => 'decimal',
		'fPreisAuftragMin' => 'decimal',
		'cAuftragkennzeichnung' => 'varchar',
		'cFirmen' => 'varchar',
		'cKundengruppen' => 'varchar',
		'cVersandklassen' => 'varchar',
		'cZahlungsarten' => 'varchar',
		'nEnthaeltArtAusWarengruppe' => 'tinyint',
		'nAlleOhneWarengruppe' => 'tinyint',
		'nAlleOhneVersandart' => 'tinyint',
		'nAlleOhneZahlungsart' => 'tinyint',
		'nDirektVerpacken' => 'tinyint',
		'cBenutzer' => 'varchar',
		'nSortenrein' => 'tinyint',
		'nAuftragsArt' => 'tinyint',
		'nMHDHandling' => 'tinyint',
		'nMHDMinHaltbarkeit' => 'int',
		'nArtikelBreiteVon' => 'int',
		'nArtikelBreiteBis' => 'int',
		'nArtikelHoeheVon' => 'int',
		'nArtikelHoeheBis' => 'int',
		'nArtikelLaengeVon' => 'int',
		'nArtikelLaengeBis' => 'int',
		'nMobilerPacktisch' => 'tinyint',
		'nBoxenNurGanzeStuecklistenAufPL' => 'tinyint',
		'nAuftragsVolumenVon' => 'bigint',
		'nAuftragsVolumenBis' => 'bigint',
		'nOhneVolumenAusschliessen' => 'tinyint',
		'nStuecklisteVonGleichenPlatz' => 'tinyint',
		'nMobileAppPicklistenVorlage' => 'tinyint',
		'nRetourenplatzReservieren' => 'tinyint',
		'nNachschubPickenLast' => 'tinyint',
		'nPlatzPrioBeruecksichtigen' => 'tinyint',
		'kPicklistenVorlageUrsprung' => 'int',
		'nEnthaeltArtAusEigeneFelder' => 'tinyint',
		'nEnthaeltArtArtikelZustand' => 'tinyint',
		'nNurAusgewaehlteVersandartenAnzeigen' => 'tinyint',
		'cAuftragsPrio' => 'varchar',
		'nAngebrocheneBoxenImmerVervollstaendigen' => 'tinyint',
	];

	/** @var int kPicklisteVorlage */
	public $kPicklisteVorlage;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var int nIstVorlage */
	public $nIstVorlage;

	/** @var int nAnzahlBestellungen */
	public $nAnzahlBestellungen;

	/** @var int kBestellNr */
	public $kBestellNr;

	/** @var int nAnzahlArtikelAuftragMax */
	public $nAnzahlArtikelAuftragMax;

	/** @var int nAnzahlArtikelAuftragMin */
	public $nAnzahlArtikelAuftragMin;

	/** @var int nTeillieferungen */
	public $nTeillieferungen;

	/** @var string fTeillieferungenWert */
	public $fTeillieferungenWert;

	/** @var int nBoxenVon */
	public $nBoxenVon;

	/** @var int nBoxenBis */
	public $nBoxenBis;

	/** @var int nEinArtikelPickliste */
	public $nEinArtikelPickliste;

	/** @var string fGewichtVon */
	public $fGewichtVon;

	/** @var string fGewichtBis */
	public $fGewichtBis;

	/** @var string cWarenLagerPlatzVon */
	public $cWarenLagerPlatzVon;

	/** @var string cWarenLagerPlatzBis */
	public $cWarenLagerPlatzBis;

	/** @var int nSortierung */
	public $nSortierung;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string dVonDatum */
	public $dVonDatum;

	/** @var string dBisDatum */
	public $dBisDatum;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dAngelegt */
	public $dAngelegt;

	/** @var string cVersandartNr */
	public $cVersandartNr;

	/** @var string cShops */
	public $cShops;

	/** @var string cPlattformen */
	public $cPlattformen;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var string cName */
	public $cName;

	/** @var int nWEPlatzReservieren */
	public $nWEPlatzReservieren;

	/** @var int nQuickSlot */
	public $nQuickSlot;

	/** @var string cWarengruppen */
	public $cWarengruppen;

	/** @var int kRollendeKommissionierungPickwagen */
	public $kRollendeKommissionierungPickwagen;

	/** @var int nBestellungWMSFreigabe */
	public $nBestellungWMSFreigabe;

	/** @var int nMaxAnzahlArtikel */
	public $nMaxAnzahlArtikel;

	/** @var int nLadenlokalEinbeziehen */
	public $nLadenlokalEinbeziehen;

	/** @var int nNichtBezahltVorkommissionieren */
	public $nNichtBezahltVorkommissionieren;

	/** @var int nNichtBezahltAutomatischAufVorkommi */
	public $nNichtBezahltAutomatischAufVorkommi;

	/** @var string cLieferlaender */
	public $cLieferlaender;

	/** @var string cLagerbereiche */
	public $cLagerbereiche;

	/** @var string fPreisAuftragMax */
	public $fPreisAuftragMax;

	/** @var string fPreisAuftragMin */
	public $fPreisAuftragMin;

	/** @var string cAuftragkennzeichnung */
	public $cAuftragkennzeichnung;

	/** @var string cFirmen */
	public $cFirmen;

	/** @var string cKundengruppen */
	public $cKundengruppen;

	/** @var string cVersandklassen */
	public $cVersandklassen;

	/** @var string cZahlungsarten */
	public $cZahlungsarten;

	/** @var int nEnthaeltArtAusWarengruppe */
	public $nEnthaeltArtAusWarengruppe;

	/** @var int nAlleOhneWarengruppe */
	public $nAlleOhneWarengruppe;

	/** @var int nAlleOhneVersandart */
	public $nAlleOhneVersandart;

	/** @var int nAlleOhneZahlungsart */
	public $nAlleOhneZahlungsart;

	/** @var int nDirektVerpacken */
	public $nDirektVerpacken;

	/** @var string cBenutzer */
	public $cBenutzer;

	/** @var int nSortenrein */
	public $nSortenrein;

	/** @var int nAuftragsArt */
	public $nAuftragsArt;

	/** @var int nMHDHandling */
	public $nMHDHandling;

	/** @var int nMHDMinHaltbarkeit */
	public $nMHDMinHaltbarkeit;

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

	/** @var int nMobilerPacktisch */
	public $nMobilerPacktisch;

	/** @var int nBoxenNurGanzeStuecklistenAufPL */
	public $nBoxenNurGanzeStuecklistenAufPL;

	/** @var int nAuftragsVolumenVon */
	public $nAuftragsVolumenVon;

	/** @var int nAuftragsVolumenBis */
	public $nAuftragsVolumenBis;

	/** @var int nOhneVolumenAusschliessen */
	public $nOhneVolumenAusschliessen;

	/** @var int nStuecklisteVonGleichenPlatz */
	public $nStuecklisteVonGleichenPlatz;

	/** @var int nMobileAppPicklistenVorlage */
	public $nMobileAppPicklistenVorlage;

	/** @var int nRetourenplatzReservieren */
	public $nRetourenplatzReservieren;

	/** @var int nNachschubPickenLast */
	public $nNachschubPickenLast;

	/** @var int nPlatzPrioBeruecksichtigen */
	public $nPlatzPrioBeruecksichtigen;

	/** @var int kPicklistenVorlageUrsprung */
	public $kPicklistenVorlageUrsprung;

	/** @var int nEnthaeltArtAusEigeneFelder */
	public $nEnthaeltArtAusEigeneFelder;

	/** @var int nEnthaeltArtArtikelZustand */
	public $nEnthaeltArtArtikelZustand;

	/** @var int nNurAusgewaehlteVersandartenAnzeigen */
	public $nNurAusgewaehlteVersandartenAnzeigen;

	/** @var string cAuftragsPrio */
	public $cAuftragsPrio;

	/** @var int nAngebrocheneBoxenImmerVervollstaendigen */
	public $nAngebrocheneBoxenImmerVervollstaendigen;
}
