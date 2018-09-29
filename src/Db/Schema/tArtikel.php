<?php

namespace App\Db\Schema;

class tArtikel
{
	const TABLE_NAME = 'tArtikel';
	const kArtikel = 'kArtikel';
	const cArtNr = 'cArtNr';
	const fVKNetto = 'fVKNetto';
	const fUVP = 'fUVP';
	const cAnmerkung = 'cAnmerkung';
	const cPreisliste = 'cPreisliste';
	const cAktiv = 'cAktiv';
	const nLagerbestand = 'nLagerbestand';
	const nMindestbestellmaenge = 'nMindestbestellmaenge';
	const cBarcode = 'cBarcode';
	const cErloeskonto = 'cErloeskonto';
	const cTopArtikel = 'cTopArtikel';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';
	const fGewicht = 'fGewicht';
	const cNeu = 'cNeu';
	const cLagerArtikel = 'cLagerArtikel';
	const cTeilbar = 'cTeilbar';
	const cLagerAktiv = 'cLagerAktiv';
	const cLagerKleinerNull = 'cLagerKleinerNull';
	const nMidestbestand = 'nMidestbestand';
	const fEKNetto = 'fEKNetto';
	const fEbayPreis = 'fEbayPreis';
	const cLagerVariation = 'cLagerVariation';
	const nDelete = 'nDelete';
	const dMod = 'dMod';
	const fPackeinheit = 'fPackeinheit';
	const nVPE = 'nVPE';
	const fVPEWert = 'fVPEWert';
	const cSuchbegriffe = 'cSuchbegriffe';
	const cTaric = 'cTaric';
	const cHerkunftsland = 'cHerkunftsland';
	const kSteuerklasse = 'kSteuerklasse';
	const dErstelldatum = 'dErstelldatum';
	const dErscheinungsdatum = 'dErscheinungsdatum';
	const nSort = 'nSort';
	const kVersandklasse = 'kVersandklasse';
	const fArtGewicht = 'fArtGewicht';
	const cHAN = 'cHAN';
	const cSerie = 'cSerie';
	const cISBN = 'cISBN';
	const cUNNummer = 'cUNNummer';
	const cGefahrnr = 'cGefahrnr';
	const cASIN = 'cASIN';
	const kEigenschaftKombi = 'kEigenschaftKombi';
	const kVaterArtikel = 'kVaterArtikel';
	const nIstVater = 'nIstVater';
	const nIstMindestbestand = 'nIstMindestbestand';
	const fAbnahmeintervall = 'fAbnahmeintervall';
	const kStueckliste = 'kStueckliste';
	const cUPC = 'cUPC';
	const kWarengruppe = 'kWarengruppe';
	const cEPID = 'cEPID';
	const nMHD = 'nMHD';
	const nCharge = 'nCharge';
	const nNichtBestellbar = 'nNichtBestellbar';
	const fAmazonVK = 'fAmazonVK';
	const nPufferTyp = 'nPufferTyp';
	const nPuffer = 'nPuffer';
	const nProzentualePreisStaffelAktiv = 'nProzentualePreisStaffelAktiv';
	const nSeriennummernVerfolgung = 'nSeriennummernVerfolgung';
	const kHersteller = 'kHersteller';
	const kLieferStatus = 'kLieferStatus';
	const kMassEinheit = 'kMassEinheit';
	const fMassMenge = 'fMassMenge';
	const kGrundPreisEinheit = 'kGrundPreisEinheit';
	const fGrundpreisMenge = 'fGrundpreisMenge';
	const fBreite = 'fBreite';
	const fHoehe = 'fHoehe';
	const fLaenge = 'fLaenge';
	const kVPEEinheit = 'kVPEEinheit';
	const nLiefertageWennAusverkauft = 'nLiefertageWennAusverkauft';
	const kVerkaufsEinheit = 'kVerkaufsEinheit';
	const dZulaufVerfuegbarAm = 'dZulaufVerfuegbarAm';
	const nAutomatischeLiefertageberechnung = 'nAutomatischeLiefertageberechnung';
	const nBearbeitungszeit = 'nBearbeitungszeit';
	const fLetzterEK = 'fLetzterEK';
	const dLetzterEK = 'dLetzterEK';
	const kBenutzerLetzteAenderung = 'kBenutzerLetzteAenderung';
	const nZulaufVerfuegbarMenge = 'nZulaufVerfuegbarMenge';
	const dNeuImSortiment = 'dNeuImSortiment';
	const nEbayAbgleich = 'nEbayAbgleich';
	const kZustand = 'kZustand';
	const cAmazonFNSKU = 'cAmazonFNSKU';
	const cJfpid = 'cJfpid';
	const nPaketlaufzeitMin = 'nPaketlaufzeitMin';
	const nPaketlaufzeitMax = 'nPaketlaufzeitMax';
	const COLUMN_NAMES = [
		'kArtikel',
		'cArtNr',
		'fVKNetto',
		'fUVP',
		'cAnmerkung',
		'cPreisliste',
		'cAktiv',
		'nLagerbestand',
		'nMindestbestellmaenge',
		'cBarcode',
		'cErloeskonto',
		'cTopArtikel',
		'cInet',
		'cDelInet',
		'fGewicht',
		'cNeu',
		'cLagerArtikel',
		'cTeilbar',
		'cLagerAktiv',
		'cLagerKleinerNull',
		'nMidestbestand',
		'fEKNetto',
		'fEbayPreis',
		'cLagerVariation',
		'nDelete',
		'dMod',
		'fPackeinheit',
		'nVPE',
		'fVPEWert',
		'cSuchbegriffe',
		'cTaric',
		'cHerkunftsland',
		'kSteuerklasse',
		'dErstelldatum',
		'dErscheinungsdatum',
		'nSort',
		'kVersandklasse',
		'fArtGewicht',
		'cHAN',
		'cSerie',
		'cISBN',
		'cUNNummer',
		'cGefahrnr',
		'cASIN',
		'kEigenschaftKombi',
		'kVaterArtikel',
		'nIstVater',
		'nIstMindestbestand',
		'fAbnahmeintervall',
		'kStueckliste',
		'cUPC',
		'kWarengruppe',
		'cEPID',
		'nMHD',
		'nCharge',
		'nNichtBestellbar',
		'fAmazonVK',
		'nPufferTyp',
		'nPuffer',
		'nProzentualePreisStaffelAktiv',
		'nSeriennummernVerfolgung',
		'kHersteller',
		'kLieferStatus',
		'kMassEinheit',
		'fMassMenge',
		'kGrundPreisEinheit',
		'fGrundpreisMenge',
		'fBreite',
		'fHoehe',
		'fLaenge',
		'kVPEEinheit',
		'nLiefertageWennAusverkauft',
		'kVerkaufsEinheit',
		'dZulaufVerfuegbarAm',
		'nAutomatischeLiefertageberechnung',
		'nBearbeitungszeit',
		'fLetzterEK',
		'dLetzterEK',
		'kBenutzerLetzteAenderung',
		'nZulaufVerfuegbarMenge',
		'dNeuImSortiment',
		'nEbayAbgleich',
		'kZustand',
		'cAmazonFNSKU',
		'cJfpid',
		'nPaketlaufzeitMin',
		'nPaketlaufzeitMax',
	];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'fVKNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fUVP' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAnmerkung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cPreisliste' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'nLagerbestand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMindestbestellmaenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBarcode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cErloeskonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cTopArtikel' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cDelInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'fGewicht' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cNeu' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cLagerArtikel' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cTeilbar' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cLagerAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cLagerKleinerNull' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'nMidestbestand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
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
		'fEbayPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLagerVariation' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'nDelete' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dMod' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPackeinheit' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVPE' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVPEWert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSuchbegriffe' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTaric' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cHerkunftsland' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'kSteuerklasse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstelldatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErscheinungsdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandklasse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fArtGewicht' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHAN' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSerie' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cISBN' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cUNNummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cGefahrnr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cASIN' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kEigenschaftKombi' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVaterArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstVater' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstMindestbestand' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAbnahmeintervall' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStueckliste' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cUPC' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kWarengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cEPID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nMHD' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nCharge' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nNichtBestellbar' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAmazonVK' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPufferTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPuffer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nProzentualePreisStaffelAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSeriennummernVerfolgung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kHersteller' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMassEinheit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMassMenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kGrundPreisEinheit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGrundpreisMenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBreite' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fHoehe' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLaenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVPEEinheit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLiefertageWennAusverkauft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVerkaufsEinheit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZulaufVerfuegbarAm' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAutomatischeLiefertageberechnung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBearbeitungszeit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLetzterEK' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLetzterEK' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzerLetzteAenderung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZulaufVerfuegbarMenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dNeuImSortiment' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEbayAbgleich' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZustand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAmazonFNSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cJfpid' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'nPaketlaufzeitMin' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPaketlaufzeitMax' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var string fVKNetto */
	public $fVKNetto;

	/** @var string fUVP */
	public $fUVP;

	/** @var string cAnmerkung */
	public $cAnmerkung;

	/** @var string cPreisliste */
	public $cPreisliste;

	/** @var string cAktiv */
	public $cAktiv;

	/** @var string nLagerbestand */
	public $nLagerbestand;

	/** @var string nMindestbestellmaenge */
	public $nMindestbestellmaenge;

	/** @var string cBarcode */
	public $cBarcode;

	/** @var string cErloeskonto */
	public $cErloeskonto;

	/** @var string cTopArtikel */
	public $cTopArtikel;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;

	/** @var string fGewicht */
	public $fGewicht;

	/** @var string cNeu */
	public $cNeu;

	/** @var string cLagerArtikel */
	public $cLagerArtikel;

	/** @var string cTeilbar */
	public $cTeilbar;

	/** @var string cLagerAktiv */
	public $cLagerAktiv;

	/** @var string cLagerKleinerNull */
	public $cLagerKleinerNull;

	/** @var string nMidestbestand */
	public $nMidestbestand;

	/** @var string fEKNetto */
	public $fEKNetto;

	/** @var string fEbayPreis */
	public $fEbayPreis;

	/** @var string cLagerVariation */
	public $cLagerVariation;

	/** @var int nDelete */
	public $nDelete;

	/** @var string dMod */
	public $dMod;

	/** @var string fPackeinheit */
	public $fPackeinheit;

	/** @var int nVPE */
	public $nVPE;

	/** @var string fVPEWert */
	public $fVPEWert;

	/** @var string cSuchbegriffe */
	public $cSuchbegriffe;

	/** @var string cTaric */
	public $cTaric;

	/** @var string cHerkunftsland */
	public $cHerkunftsland;

	/** @var int kSteuerklasse */
	public $kSteuerklasse;

	/** @var string dErstelldatum */
	public $dErstelldatum;

	/** @var string dErscheinungsdatum */
	public $dErscheinungsdatum;

	/** @var int nSort */
	public $nSort;

	/** @var int kVersandklasse */
	public $kVersandklasse;

	/** @var string fArtGewicht */
	public $fArtGewicht;

	/** @var string cHAN */
	public $cHAN;

	/** @var string cSerie */
	public $cSerie;

	/** @var string cISBN */
	public $cISBN;

	/** @var string cUNNummer */
	public $cUNNummer;

	/** @var string cGefahrnr */
	public $cGefahrnr;

	/** @var string cASIN */
	public $cASIN;

	/** @var int kEigenschaftKombi */
	public $kEigenschaftKombi;

	/** @var int kVaterArtikel */
	public $kVaterArtikel;

	/** @var int nIstVater */
	public $nIstVater;

	/** @var int nIstMindestbestand */
	public $nIstMindestbestand;

	/** @var string fAbnahmeintervall */
	public $fAbnahmeintervall;

	/** @var int kStueckliste */
	public $kStueckliste;

	/** @var string cUPC */
	public $cUPC;

	/** @var int kWarengruppe */
	public $kWarengruppe;

	/** @var string cEPID */
	public $cEPID;

	/** @var int nMHD */
	public $nMHD;

	/** @var int nCharge */
	public $nCharge;

	/** @var int nNichtBestellbar */
	public $nNichtBestellbar;

	/** @var string fAmazonVK */
	public $fAmazonVK;

	/** @var int nPufferTyp */
	public $nPufferTyp;

	/** @var int nPuffer */
	public $nPuffer;

	/** @var int nProzentualePreisStaffelAktiv */
	public $nProzentualePreisStaffelAktiv;

	/** @var int nSeriennummernVerfolgung */
	public $nSeriennummernVerfolgung;

	/** @var int kHersteller */
	public $kHersteller;

	/** @var int kLieferStatus */
	public $kLieferStatus;

	/** @var int kMassEinheit */
	public $kMassEinheit;

	/** @var string fMassMenge */
	public $fMassMenge;

	/** @var int kGrundPreisEinheit */
	public $kGrundPreisEinheit;

	/** @var string fGrundpreisMenge */
	public $fGrundpreisMenge;

	/** @var string fBreite */
	public $fBreite;

	/** @var string fHoehe */
	public $fHoehe;

	/** @var string fLaenge */
	public $fLaenge;

	/** @var int kVPEEinheit */
	public $kVPEEinheit;

	/** @var int nLiefertageWennAusverkauft */
	public $nLiefertageWennAusverkauft;

	/** @var int kVerkaufsEinheit */
	public $kVerkaufsEinheit;

	/** @var string dZulaufVerfuegbarAm */
	public $dZulaufVerfuegbarAm;

	/** @var int nAutomatischeLiefertageberechnung */
	public $nAutomatischeLiefertageberechnung;

	/** @var int nBearbeitungszeit */
	public $nBearbeitungszeit;

	/** @var string fLetzterEK */
	public $fLetzterEK;

	/** @var string dLetzterEK */
	public $dLetzterEK;

	/** @var int kBenutzerLetzteAenderung */
	public $kBenutzerLetzteAenderung;

	/** @var string nZulaufVerfuegbarMenge */
	public $nZulaufVerfuegbarMenge;

	/** @var string dNeuImSortiment */
	public $dNeuImSortiment;

	/** @var int nEbayAbgleich */
	public $nEbayAbgleich;

	/** @var int kZustand */
	public $kZustand;

	/** @var string cAmazonFNSKU */
	public $cAmazonFNSKU;

	/** @var string cJfpid */
	public $cJfpid;

	/** @var int nPaketlaufzeitMin */
	public $nPaketlaufzeitMin;

	/** @var int nPaketlaufzeitMax */
	public $nPaketlaufzeitMax;
}
