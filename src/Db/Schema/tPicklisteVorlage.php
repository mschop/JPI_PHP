<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kPicklisteVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPickliste' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstVorlage' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlBestellungen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellNr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlArtikelAuftragMax' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlArtikelAuftragMin' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTeillieferungen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fTeillieferungenWert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBoxenVon' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBoxenBis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEinArtikelPickliste' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGewichtVon' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGewichtBis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWarenLagerPlatzVon' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cWarenLagerPlatzBis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSortierung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
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
		'dVonDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dBisDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAngelegt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVersandartNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cShops' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPlattformen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'nWEPlatzReservieren' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQuickSlot' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWarengruppen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
		'kRollendeKommissionierungPickwagen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBestellungWMSFreigabe' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMaxAnzahlArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLadenlokalEinbeziehen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nNichtBezahltVorkommissionieren' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nNichtBezahltAutomatischAufVorkommi' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLieferlaender' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'cLagerbereiche' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
		'fPreisAuftragMax' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreisAuftragMin' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAuftragkennzeichnung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
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
		'nDirektVerpacken' => [
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
		'nSortenrein' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAuftragsArt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMHDHandling' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMHDMinHaltbarkeit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
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
		'nMobilerPacktisch' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBoxenNurGanzeStuecklistenAufPL' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAuftragsVolumenVon' => [
			'type' => 'bigint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAuftragsVolumenBis' => [
			'type' => 'bigint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nOhneVolumenAusschliessen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStuecklisteVonGleichenPlatz' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMobileAppPicklistenVorlage' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nRetourenplatzReservieren' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nNachschubPickenLast' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlatzPrioBeruecksichtigen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPicklistenVorlageUrsprung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEnthaeltArtAusEigeneFelder' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEnthaeltArtArtikelZustand' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nNurAusgewaehlteVersandartenAnzeigen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAuftragsPrio' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 512,
			'characterSetName' => 'iso_1',
		],
		'nAngebrocheneBoxenImmerVervollstaendigen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
