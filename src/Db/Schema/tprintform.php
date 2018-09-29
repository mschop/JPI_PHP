<?php

namespace App\Db\Schema;

class tprintform
{
	const TABLE_NAME = 'tprintform';
	const cKopfzeichnen = 'cKopfzeichnen';
	const cFusszeichnen = 'cFusszeichnen';
	const fKALinks = 'fKALinks';
	const fKAOben = 'fKAOben';
	const fFDLinks = 'fFDLinks';
	const fFDOben = 'fFDOben';
	const cFirmendatenklein = 'cFirmendatenklein';
	const cFirmendatendrucken = 'cFirmendatendrucken';
	const cFuss = 'cFuss';
	const cKdNrDrucken = 'cKdNrDrucken';
	const cbzglAuftragDrucken = 'cbzglAuftragDrucken';
	const cRechnungZzglMwst = 'cRechnungZzglMwst';
	const fGLinks = 'fGLinks';
	const fGRechts = 'fGRechts';
	const cAngebotsText = 'cAngebotsText';
	const cAuftragsText = 'cAuftragsText';
	const cRechnungsText = 'cRechnungsText';
	const cMwStAusweisen = 'cMwStAusweisen';
	const cFdrucken = 'cFdrucken';
	const fFunten = 'fFunten';
	const fFmitte = 'fFmitte';
	const fFoben = 'fFoben';
	const cZahlungsziel = 'cZahlungsziel';
	const fFbreite = 'fFbreite';
	const nZwischensumme = 'nZwischensumme';
	const cEinheit = 'cEinheit';
	const cLieferText = 'cLieferText';
	const nVariationAufpreis = 'nVariationAufpreis';
	const nLAdrDrucken = 'nLAdrDrucken';
	const nTelDrucken = 'nTelDrucken';
	const nPixelFont = 'nPixelFont';
	const cIGLText = 'cIGLText';
	const cUStFreiText = 'cUStFreiText';
	const cReverseCharge = 'cReverseCharge';
	const COLUMN_NAMES = [
		'cKopfzeichnen',
		'cFusszeichnen',
		'fKALinks',
		'fKAOben',
		'fFDLinks',
		'fFDOben',
		'cFirmendatenklein',
		'cFirmendatendrucken',
		'cFuss',
		'cKdNrDrucken',
		'cbzglAuftragDrucken',
		'cRechnungZzglMwst',
		'fGLinks',
		'fGRechts',
		'cAngebotsText',
		'cAuftragsText',
		'cRechnungsText',
		'cMwStAusweisen',
		'cFdrucken',
		'fFunten',
		'fFmitte',
		'fFoben',
		'cZahlungsziel',
		'fFbreite',
		'nZwischensumme',
		'cEinheit',
		'cLieferText',
		'nVariationAufpreis',
		'nLAdrDrucken',
		'nTelDrucken',
		'nPixelFont',
		'cIGLText',
		'cUStFreiText',
		'cReverseCharge',
	];
	const COLUMN_DEFINITIONS = [
		'cKopfzeichnen' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cFusszeichnen' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'fKALinks' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fKAOben' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFDLinks' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFDOben' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFirmendatenklein' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cFirmendatendrucken' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cFuss' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKdNrDrucken' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cbzglAuftragDrucken' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cRechnungZzglMwst' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'fGLinks' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGRechts' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAngebotsText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cAuftragsText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cRechnungsText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cMwStAusweisen' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cFdrucken' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'fFunten' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFmitte' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFoben' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cZahlungsziel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fFbreite' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZwischensumme' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cEinheit' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cLieferText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 40,
			'characterSetName' => 'iso_1',
		],
		'nVariationAufpreis' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLAdrDrucken' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTelDrucken' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPixelFont' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cIGLText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 512,
			'characterSetName' => 'iso_1',
		],
		'cUStFreiText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 512,
			'characterSetName' => 'iso_1',
		],
		'cReverseCharge' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 512,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cKopfzeichnen */
	public $cKopfzeichnen;

	/** @var string cFusszeichnen */
	public $cFusszeichnen;

	/** @var string fKALinks */
	public $fKALinks;

	/** @var string fKAOben */
	public $fKAOben;

	/** @var string fFDLinks */
	public $fFDLinks;

	/** @var string fFDOben */
	public $fFDOben;

	/** @var string cFirmendatenklein */
	public $cFirmendatenklein;

	/** @var string cFirmendatendrucken */
	public $cFirmendatendrucken;

	/** @var string cFuss */
	public $cFuss;

	/** @var string cKdNrDrucken */
	public $cKdNrDrucken;

	/** @var string cbzglAuftragDrucken */
	public $cbzglAuftragDrucken;

	/** @var string cRechnungZzglMwst */
	public $cRechnungZzglMwst;

	/** @var string fGLinks */
	public $fGLinks;

	/** @var string fGRechts */
	public $fGRechts;

	/** @var string cAngebotsText */
	public $cAngebotsText;

	/** @var string cAuftragsText */
	public $cAuftragsText;

	/** @var string cRechnungsText */
	public $cRechnungsText;

	/** @var string cMwStAusweisen */
	public $cMwStAusweisen;

	/** @var string cFdrucken */
	public $cFdrucken;

	/** @var string fFunten */
	public $fFunten;

	/** @var string fFmitte */
	public $fFmitte;

	/** @var string fFoben */
	public $fFoben;

	/** @var string cZahlungsziel */
	public $cZahlungsziel;

	/** @var string fFbreite */
	public $fFbreite;

	/** @var int nZwischensumme */
	public $nZwischensumme;

	/** @var string cEinheit */
	public $cEinheit;

	/** @var string cLieferText */
	public $cLieferText;

	/** @var int nVariationAufpreis */
	public $nVariationAufpreis;

	/** @var int nLAdrDrucken */
	public $nLAdrDrucken;

	/** @var int nTelDrucken */
	public $nTelDrucken;

	/** @var int nPixelFont */
	public $nPixelFont;

	/** @var string cIGLText */
	public $cIGLText;

	/** @var string cUStFreiText */
	public $cUStFreiText;

	/** @var string cReverseCharge */
	public $cReverseCharge;
}
