<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kRMRetoure',
		'kRMStatus',
		'kKunde',
		'kBenutzer',
		'cRetoureNr',
		'cAnsprechpartner',
		'dErstellt',
		'cKommentarExtern',
		'kRMRetoureAbholAdresse',
		'kWarenlager',
		'kFirma',
		'nHerkunft',
		'cKommentarIntern',
		'fKorrekturBetrag',
		'nVersandkostenErstatten',
		'cKorrekturBetragKommentar',
		'kBestellungUmtausch',
		'kGutschrift',
		'kBestellung',
		'cFfnReturnId',
		'cExternalNumber',
	];
	const COLUMN_DEFINITIONS = [
		'kRMRetoure' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
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
		'cRetoureNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAnsprechpartner' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKommentarExtern' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'kRMRetoureAbholAdresse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
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
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nHerkunft' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKommentarIntern' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'fKorrekturBetrag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersandkostenErstatten' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKorrekturBetragKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'kBestellungUmtausch' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kGutschrift' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFfnReturnId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cExternalNumber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

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
