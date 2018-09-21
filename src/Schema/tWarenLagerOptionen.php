<?php

namespace App\Schema;

class tWarenLagerOptionen
{
	const TABLE_NAME = 'tWarenLagerOptionen';
	const kWarenLagerOptionen = 'kWarenLagerOptionen';
	const kWarenLager = 'kWarenLager';
	const nEinlagerwagenVerwenden = 'nEinlagerwagenVerwenden';
	const nWEDirektBuchenAktiv = 'nWEDirektBuchenAktiv';
	const kWarenLagerPlatzEingang = 'kWarenLagerPlatzEingang';
	const nUseScannerImWE = 'nUseScannerImWE';
	const kWarenlagerPlatzBoxen = 'kWarenlagerPlatzBoxen';
	const nWADirektAusWE = 'nWADirektAusWE';
	const nWADirektAusWE1Artikel = 'nWADirektAusWE1Artikel';
	const nRollendeKommissionierung = 'nRollendeKommissionierung';
	const nEazyShipping = 'nEazyShipping';
	const nUeberlieferung = 'nUeberlieferung';
	const nUeberlieferungNachfragen = 'nUeberlieferungNachfragen';
	const nScanInMehrereArtikel = 'nScanInMehrereArtikel';
	const nVersandboxenProzess = 'nVersandboxenProzess';
	const nVersandboxenProzessmitRoKo = 'nVersandboxenProzessmitRoKo';
	const nChargen = 'nChargen';
	const nMHD = 'nMHD';
	const nWADirektAusWEAuchLeereBoxenBelegen = 'nWADirektAusWEAuchLeereBoxenBelegen';
	const nWENeuenArtikelAnlegen = 'nWENeuenArtikelAnlegen';
	const kKategorieNeuerArtikel = 'kKategorieNeuerArtikel';
	const nWEOffeneBestellungsmengenZeigen = 'nWEOffeneBestellungsmengenZeigen';
	const nVerpackenMehrMengeErlaubt = 'nVerpackenMehrMengeErlaubt';
	const nWADirektAusWEAuchLeereBoxenBelegenZulauf = 'nWADirektAusWEAuchLeereBoxenBelegenZulauf';
	const nLagerKleinerNullImWESetzen = 'nLagerKleinerNullImWESetzen';
	const nVerpackenBestellhinweis = 'nVerpackenBestellhinweis';
	const nVerpackenAnmerkung = 'nVerpackenAnmerkung';
	const kWarenlagerPlatzInBearbeitung = 'kWarenlagerPlatzInBearbeitung';
	const nAbgelaufenesMHDNichtEinbuchen = 'nAbgelaufenesMHDNichtEinbuchen';
	const nPackHinweisVorVerpacken = 'nPackHinweisVorVerpacken';
	const nGanzeBestellungVerpackenInEazyShip = 'nGanzeBestellungVerpackenInEazyShip';
	const nMengeBestaetigen = 'nMengeBestaetigen';
	const nWADirektAusWEAuchLeereBoxenBelegenFreiProzent = 'nWADirektAusWEAuchLeereBoxenBelegenFreiProzent';
	const nWEMengeInArtField = 'nWEMengeInArtField';
	const nBesondereWEPlaetze = 'nBesondereWEPlaetze';
	const nNumPad = 'nNumPad';
	const nPickenOhneScan = 'nPickenOhneScan';
	const nKeineLiefNachfrage = 'nKeineLiefNachfrage';
	const nWAVersandartScan = 'nWAVersandartScan';
	const nEazyShippingArtikelDetails = 'nEazyShippingArtikelDetails';
	const nEazyShippingKeinenRechnungOhneDruck = 'nEazyShippingKeinenRechnungOhneDruck';
	const nEazyShippingKeineRechnungBeiNullEuro = 'nEazyShippingKeineRechnungBeiNullEuro';
	const nKommentarPflichtKorrekturbuchung = 'nKommentarPflichtKorrekturbuchung';
	const nArtikelAttributeBeachten = 'nArtikelAttributeBeachten';
	const nVerpackenKundenKommentar = 'nVerpackenKundenKommentar';
	const nBoxenDirektTauschen = 'nBoxenDirektTauschen';
	const nEazyShippingArtikelButtons = 'nEazyShippingArtikelButtons';
	const nEazyShippingFreiposButtons = 'nEazyShippingFreiposButtons';
	const nVersandBoxenScan = 'nVersandBoxenScan';
	const nVersandBoxenButtons = 'nVersandBoxenButtons';
	const nVersandBoxenFreiPosButtons = 'nVersandBoxenFreiPosButtons';
	const nBoxenFuellenBestaetigen = 'nBoxenFuellenBestaetigen';
	const nAutoAbmelden = 'nAutoAbmelden';
	const nEazyShippingSplittAuftrag = 'nEazyShippingSplittAuftrag';
	const nWEAufVorgabeplatz = 'nWEAufVorgabeplatz';
	const nArtikelAnmerkungenPackhinweis = 'nArtikelAnmerkungenPackhinweis';
	const nPacktischMHDChargeNichtScannen = 'nPacktischMHDChargeNichtScannen';
	const nWAKeinAuftragSplittBeiTeillief = 'nWAKeinAuftragSplittBeiTeillief';
	const nMobilerPacktischKeinenRechnungOhneDruck = 'nMobilerPacktischKeinenRechnungOhneDruck';
	const nMobilerPacktischKeineRechnungBeiNullEuro = 'nMobilerPacktischKeineRechnungBeiNullEuro';
	const nGanzeBestellungVerpackenNurPickInEazyShip = 'nGanzeBestellungVerpackenNurPickInEazyShip';
	const nMobilerPacktischMengeBestaetigen = 'nMobilerPacktischMengeBestaetigen';
	const nAllePackHinweiseAlsPopUp = 'nAllePackHinweiseAlsPopUp';
	const kWarenLagerPlatzRetoure = 'kWarenLagerPlatzRetoure';
	const nRetourenPlatzManuellWaehlen = 'nRetourenPlatzManuellWaehlen';
	const nWEFremdeWarenlagerAnzeigen = 'nWEFremdeWarenlagerAnzeigen';
	const nArtikelBezeichnungAusArtikel = 'nArtikelBezeichnungAusArtikel';
	const nWEInLeereBoxenNurBeiVorkomm = 'nWEInLeereBoxenNurBeiVorkomm';
	const nWAVerpackteArtikelNachUnten = 'nWAVerpackteArtikelNachUnten';
	const nBoxenDruckAusAuftragsVorlage = 'nBoxenDruckAusAuftragsVorlage';
	const nRetoureAufVorgabeplatz = 'nRetoureAufVorgabeplatz';
	const nWAHintDisappearAfterXSeconds = 'nWAHintDisappearAfterXSeconds';
	const nWePlatzSortierung = 'nWePlatzSortierung';
	const nMobilerPacktischGebindeScanForArtikel = 'nMobilerPacktischGebindeScanForArtikel';
	const COLUMN_NAMES = [
		'kWarenLagerOptionen',
		'kWarenLager',
		'nEinlagerwagenVerwenden',
		'nWEDirektBuchenAktiv',
		'kWarenLagerPlatzEingang',
		'nUseScannerImWE',
		'kWarenlagerPlatzBoxen',
		'nWADirektAusWE',
		'nWADirektAusWE1Artikel',
		'nRollendeKommissionierung',
		'nEazyShipping',
		'nUeberlieferung',
		'nUeberlieferungNachfragen',
		'nScanInMehrereArtikel',
		'nVersandboxenProzess',
		'nVersandboxenProzessmitRoKo',
		'nChargen',
		'nMHD',
		'nWADirektAusWEAuchLeereBoxenBelegen',
		'nWENeuenArtikelAnlegen',
		'kKategorieNeuerArtikel',
		'nWEOffeneBestellungsmengenZeigen',
		'nVerpackenMehrMengeErlaubt',
		'nWADirektAusWEAuchLeereBoxenBelegenZulauf',
		'nLagerKleinerNullImWESetzen',
		'nVerpackenBestellhinweis',
		'nVerpackenAnmerkung',
		'kWarenlagerPlatzInBearbeitung',
		'nAbgelaufenesMHDNichtEinbuchen',
		'nPackHinweisVorVerpacken',
		'nGanzeBestellungVerpackenInEazyShip',
		'nMengeBestaetigen',
		'nWADirektAusWEAuchLeereBoxenBelegenFreiProzent',
		'nWEMengeInArtField',
		'nBesondereWEPlaetze',
		'nNumPad',
		'nPickenOhneScan',
		'nKeineLiefNachfrage',
		'nWAVersandartScan',
		'nEazyShippingArtikelDetails',
		'nEazyShippingKeinenRechnungOhneDruck',
		'nEazyShippingKeineRechnungBeiNullEuro',
		'nKommentarPflichtKorrekturbuchung',
		'nArtikelAttributeBeachten',
		'nVerpackenKundenKommentar',
		'nBoxenDirektTauschen',
		'nEazyShippingArtikelButtons',
		'nEazyShippingFreiposButtons',
		'nVersandBoxenScan',
		'nVersandBoxenButtons',
		'nVersandBoxenFreiPosButtons',
		'nBoxenFuellenBestaetigen',
		'nAutoAbmelden',
		'nEazyShippingSplittAuftrag',
		'nWEAufVorgabeplatz',
		'nArtikelAnmerkungenPackhinweis',
		'nPacktischMHDChargeNichtScannen',
		'nWAKeinAuftragSplittBeiTeillief',
		'nMobilerPacktischKeinenRechnungOhneDruck',
		'nMobilerPacktischKeineRechnungBeiNullEuro',
		'nGanzeBestellungVerpackenNurPickInEazyShip',
		'nMobilerPacktischMengeBestaetigen',
		'nAllePackHinweiseAlsPopUp',
		'kWarenLagerPlatzRetoure',
		'nRetourenPlatzManuellWaehlen',
		'nWEFremdeWarenlagerAnzeigen',
		'nArtikelBezeichnungAusArtikel',
		'nWEInLeereBoxenNurBeiVorkomm',
		'nWAVerpackteArtikelNachUnten',
		'nBoxenDruckAusAuftragsVorlage',
		'nRetoureAufVorgabeplatz',
		'nWAHintDisappearAfterXSeconds',
		'nWePlatzSortierung',
		'nMobilerPacktischGebindeScanForArtikel',
	];
	const COLUMN_TYPES = [
		'kWarenLagerOptionen' => 'int',
		'kWarenLager' => 'int',
		'nEinlagerwagenVerwenden' => 'tinyint',
		'nWEDirektBuchenAktiv' => 'int',
		'kWarenLagerPlatzEingang' => 'int',
		'nUseScannerImWE' => 'tinyint',
		'kWarenlagerPlatzBoxen' => 'int',
		'nWADirektAusWE' => 'int',
		'nWADirektAusWE1Artikel' => 'int',
		'nRollendeKommissionierung' => 'int',
		'nEazyShipping' => 'int',
		'nUeberlieferung' => 'int',
		'nUeberlieferungNachfragen' => 'int',
		'nScanInMehrereArtikel' => 'tinyint',
		'nVersandboxenProzess' => 'tinyint',
		'nVersandboxenProzessmitRoKo' => 'tinyint',
		'nChargen' => 'tinyint',
		'nMHD' => 'tinyint',
		'nWADirektAusWEAuchLeereBoxenBelegen' => 'tinyint',
		'nWENeuenArtikelAnlegen' => 'tinyint',
		'kKategorieNeuerArtikel' => 'int',
		'nWEOffeneBestellungsmengenZeigen' => 'tinyint',
		'nVerpackenMehrMengeErlaubt' => 'tinyint',
		'nWADirektAusWEAuchLeereBoxenBelegenZulauf' => 'tinyint',
		'nLagerKleinerNullImWESetzen' => 'tinyint',
		'nVerpackenBestellhinweis' => 'tinyint',
		'nVerpackenAnmerkung' => 'tinyint',
		'kWarenlagerPlatzInBearbeitung' => 'int',
		'nAbgelaufenesMHDNichtEinbuchen' => 'tinyint',
		'nPackHinweisVorVerpacken' => 'tinyint',
		'nGanzeBestellungVerpackenInEazyShip' => 'tinyint',
		'nMengeBestaetigen' => 'tinyint',
		'nWADirektAusWEAuchLeereBoxenBelegenFreiProzent' => 'tinyint',
		'nWEMengeInArtField' => 'tinyint',
		'nBesondereWEPlaetze' => 'tinyint',
		'nNumPad' => 'tinyint',
		'nPickenOhneScan' => 'tinyint',
		'nKeineLiefNachfrage' => 'tinyint',
		'nWAVersandartScan' => 'tinyint',
		'nEazyShippingArtikelDetails' => 'tinyint',
		'nEazyShippingKeinenRechnungOhneDruck' => 'tinyint',
		'nEazyShippingKeineRechnungBeiNullEuro' => 'tinyint',
		'nKommentarPflichtKorrekturbuchung' => 'tinyint',
		'nArtikelAttributeBeachten' => 'tinyint',
		'nVerpackenKundenKommentar' => 'tinyint',
		'nBoxenDirektTauschen' => 'tinyint',
		'nEazyShippingArtikelButtons' => 'tinyint',
		'nEazyShippingFreiposButtons' => 'tinyint',
		'nVersandBoxenScan' => 'tinyint',
		'nVersandBoxenButtons' => 'tinyint',
		'nVersandBoxenFreiPosButtons' => 'tinyint',
		'nBoxenFuellenBestaetigen' => 'tinyint',
		'nAutoAbmelden' => 'int',
		'nEazyShippingSplittAuftrag' => 'int',
		'nWEAufVorgabeplatz' => 'tinyint',
		'nArtikelAnmerkungenPackhinweis' => 'tinyint',
		'nPacktischMHDChargeNichtScannen' => 'tinyint',
		'nWAKeinAuftragSplittBeiTeillief' => 'tinyint',
		'nMobilerPacktischKeinenRechnungOhneDruck' => 'tinyint',
		'nMobilerPacktischKeineRechnungBeiNullEuro' => 'tinyint',
		'nGanzeBestellungVerpackenNurPickInEazyShip' => 'tinyint',
		'nMobilerPacktischMengeBestaetigen' => 'tinyint',
		'nAllePackHinweiseAlsPopUp' => 'tinyint',
		'kWarenLagerPlatzRetoure' => 'int',
		'nRetourenPlatzManuellWaehlen' => 'int',
		'nWEFremdeWarenlagerAnzeigen' => 'tinyint',
		'nArtikelBezeichnungAusArtikel' => 'tinyint',
		'nWEInLeereBoxenNurBeiVorkomm' => 'tinyint',
		'nWAVerpackteArtikelNachUnten' => 'tinyint',
		'nBoxenDruckAusAuftragsVorlage' => 'tinyint',
		'nRetoureAufVorgabeplatz' => 'bit',
		'nWAHintDisappearAfterXSeconds' => 'tinyint',
		'nWePlatzSortierung' => 'tinyint',
		'nMobilerPacktischGebindeScanForArtikel' => 'tinyint',
	];

	/** @var int kWarenLagerOptionen */
	public $kWarenLagerOptionen;

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int nEinlagerwagenVerwenden */
	public $nEinlagerwagenVerwenden;

	/** @var int nWEDirektBuchenAktiv */
	public $nWEDirektBuchenAktiv;

	/** @var int kWarenLagerPlatzEingang */
	public $kWarenLagerPlatzEingang;

	/** @var int nUseScannerImWE */
	public $nUseScannerImWE;

	/** @var int kWarenlagerPlatzBoxen */
	public $kWarenlagerPlatzBoxen;

	/** @var int nWADirektAusWE */
	public $nWADirektAusWE;

	/** @var int nWADirektAusWE1Artikel */
	public $nWADirektAusWE1Artikel;

	/** @var int nRollendeKommissionierung */
	public $nRollendeKommissionierung;

	/** @var int nEazyShipping */
	public $nEazyShipping;

	/** @var int nUeberlieferung */
	public $nUeberlieferung;

	/** @var int nUeberlieferungNachfragen */
	public $nUeberlieferungNachfragen;

	/** @var int nScanInMehrereArtikel */
	public $nScanInMehrereArtikel;

	/** @var int nVersandboxenProzess */
	public $nVersandboxenProzess;

	/** @var int nVersandboxenProzessmitRoKo */
	public $nVersandboxenProzessmitRoKo;

	/** @var int nChargen */
	public $nChargen;

	/** @var int nMHD */
	public $nMHD;

	/** @var int nWADirektAusWEAuchLeereBoxenBelegen */
	public $nWADirektAusWEAuchLeereBoxenBelegen;

	/** @var int nWENeuenArtikelAnlegen */
	public $nWENeuenArtikelAnlegen;

	/** @var int kKategorieNeuerArtikel */
	public $kKategorieNeuerArtikel;

	/** @var int nWEOffeneBestellungsmengenZeigen */
	public $nWEOffeneBestellungsmengenZeigen;

	/** @var int nVerpackenMehrMengeErlaubt */
	public $nVerpackenMehrMengeErlaubt;

	/** @var int nWADirektAusWEAuchLeereBoxenBelegenZulauf */
	public $nWADirektAusWEAuchLeereBoxenBelegenZulauf;

	/** @var int nLagerKleinerNullImWESetzen */
	public $nLagerKleinerNullImWESetzen;

	/** @var int nVerpackenBestellhinweis */
	public $nVerpackenBestellhinweis;

	/** @var int nVerpackenAnmerkung */
	public $nVerpackenAnmerkung;

	/** @var int kWarenlagerPlatzInBearbeitung */
	public $kWarenlagerPlatzInBearbeitung;

	/** @var int nAbgelaufenesMHDNichtEinbuchen */
	public $nAbgelaufenesMHDNichtEinbuchen;

	/** @var int nPackHinweisVorVerpacken */
	public $nPackHinweisVorVerpacken;

	/** @var int nGanzeBestellungVerpackenInEazyShip */
	public $nGanzeBestellungVerpackenInEazyShip;

	/** @var int nMengeBestaetigen */
	public $nMengeBestaetigen;

	/** @var int nWADirektAusWEAuchLeereBoxenBelegenFreiProzent */
	public $nWADirektAusWEAuchLeereBoxenBelegenFreiProzent;

	/** @var int nWEMengeInArtField */
	public $nWEMengeInArtField;

	/** @var int nBesondereWEPlaetze */
	public $nBesondereWEPlaetze;

	/** @var int nNumPad */
	public $nNumPad;

	/** @var int nPickenOhneScan */
	public $nPickenOhneScan;

	/** @var int nKeineLiefNachfrage */
	public $nKeineLiefNachfrage;

	/** @var int nWAVersandartScan */
	public $nWAVersandartScan;

	/** @var int nEazyShippingArtikelDetails */
	public $nEazyShippingArtikelDetails;

	/** @var int nEazyShippingKeinenRechnungOhneDruck */
	public $nEazyShippingKeinenRechnungOhneDruck;

	/** @var int nEazyShippingKeineRechnungBeiNullEuro */
	public $nEazyShippingKeineRechnungBeiNullEuro;

	/** @var int nKommentarPflichtKorrekturbuchung */
	public $nKommentarPflichtKorrekturbuchung;

	/** @var int nArtikelAttributeBeachten */
	public $nArtikelAttributeBeachten;

	/** @var int nVerpackenKundenKommentar */
	public $nVerpackenKundenKommentar;

	/** @var int nBoxenDirektTauschen */
	public $nBoxenDirektTauschen;

	/** @var int nEazyShippingArtikelButtons */
	public $nEazyShippingArtikelButtons;

	/** @var int nEazyShippingFreiposButtons */
	public $nEazyShippingFreiposButtons;

	/** @var int nVersandBoxenScan */
	public $nVersandBoxenScan;

	/** @var int nVersandBoxenButtons */
	public $nVersandBoxenButtons;

	/** @var int nVersandBoxenFreiPosButtons */
	public $nVersandBoxenFreiPosButtons;

	/** @var int nBoxenFuellenBestaetigen */
	public $nBoxenFuellenBestaetigen;

	/** @var int nAutoAbmelden */
	public $nAutoAbmelden;

	/** @var int nEazyShippingSplittAuftrag */
	public $nEazyShippingSplittAuftrag;

	/** @var int nWEAufVorgabeplatz */
	public $nWEAufVorgabeplatz;

	/** @var int nArtikelAnmerkungenPackhinweis */
	public $nArtikelAnmerkungenPackhinweis;

	/** @var int nPacktischMHDChargeNichtScannen */
	public $nPacktischMHDChargeNichtScannen;

	/** @var int nWAKeinAuftragSplittBeiTeillief */
	public $nWAKeinAuftragSplittBeiTeillief;

	/** @var int nMobilerPacktischKeinenRechnungOhneDruck */
	public $nMobilerPacktischKeinenRechnungOhneDruck;

	/** @var int nMobilerPacktischKeineRechnungBeiNullEuro */
	public $nMobilerPacktischKeineRechnungBeiNullEuro;

	/** @var int nGanzeBestellungVerpackenNurPickInEazyShip */
	public $nGanzeBestellungVerpackenNurPickInEazyShip;

	/** @var int nMobilerPacktischMengeBestaetigen */
	public $nMobilerPacktischMengeBestaetigen;

	/** @var int nAllePackHinweiseAlsPopUp */
	public $nAllePackHinweiseAlsPopUp;

	/** @var int kWarenLagerPlatzRetoure */
	public $kWarenLagerPlatzRetoure;

	/** @var int nRetourenPlatzManuellWaehlen */
	public $nRetourenPlatzManuellWaehlen;

	/** @var int nWEFremdeWarenlagerAnzeigen */
	public $nWEFremdeWarenlagerAnzeigen;

	/** @var int nArtikelBezeichnungAusArtikel */
	public $nArtikelBezeichnungAusArtikel;

	/** @var int nWEInLeereBoxenNurBeiVorkomm */
	public $nWEInLeereBoxenNurBeiVorkomm;

	/** @var int nWAVerpackteArtikelNachUnten */
	public $nWAVerpackteArtikelNachUnten;

	/** @var int nBoxenDruckAusAuftragsVorlage */
	public $nBoxenDruckAusAuftragsVorlage;

	/** @var boolean nRetoureAufVorgabeplatz */
	public $nRetoureAufVorgabeplatz;

	/** @var int nWAHintDisappearAfterXSeconds */
	public $nWAHintDisappearAfterXSeconds;

	/** @var int nWePlatzSortierung */
	public $nWePlatzSortierung;

	/** @var int nMobilerPacktischGebindeScanForArtikel */
	public $nMobilerPacktischGebindeScanForArtikel;
}
