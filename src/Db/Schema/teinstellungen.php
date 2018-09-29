<?php

namespace App\Db\Schema;

class teinstellungen
{
	const TABLE_NAME = 'teinstellungen';
	const kEinstellungen = 'kEinstellungen';
	const cKopfPic = 'cKopfPic';
	const cDrucker = 'cDrucker';
	const fMwSt = 'fMwSt';
	const nZahlungsziel = 'nZahlungsziel';
	const cFax = 'cFax';
	const cLagerbestand = 'cLagerbestand';
	const cLootSize = 'cLootSize';
	const cLagerKleinerNull = 'cLagerKleinerNull';
	const cFaxParam = 'cFaxParam';
	const cRechnung2x = 'cRechnung2x';
	const cRechnungsDrucker = 'cRechnungsDrucker';
	const cUSt = 'cUSt';
	const cEtikettDrucker = 'cEtikettDrucker';
	const nRunden = 'nRunden';
	const nLog = 'nLog';
	const cLogPfad = 'cLogPfad';
	const cLieferschein2x = 'cLieferschein2x';
	const nLagerAnzahl = 'nLagerAnzahl';
	const cBeschreibung = 'cBeschreibung';
	const nAuftragAendern = 'nAuftragAendern';
	const nSNAbfragen = 'nSNAbfragen';
	const COLUMN_NAMES = [
		'kEinstellungen',
		'cKopfPic',
		'cDrucker',
		'fMwSt',
		'nZahlungsziel',
		'cFax',
		'cLagerbestand',
		'cLootSize',
		'cLagerKleinerNull',
		'cFaxParam',
		'cRechnung2x',
		'cRechnungsDrucker',
		'cUSt',
		'cEtikettDrucker',
		'nRunden',
		'nLog',
		'cLogPfad',
		'cLieferschein2x',
		'nLagerAnzahl',
		'cBeschreibung',
		'nAuftragAendern',
		'nSNAbfragen',
	];
	const COLUMN_DEFINITIONS = [
		'kEinstellungen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKopfPic' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDrucker' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fMwSt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZahlungsziel' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFax' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLagerbestand' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cLootSize' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cLagerKleinerNull' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cFaxParam' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cRechnung2x' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cRechnungsDrucker' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cUSt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cEtikettDrucker' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nRunden' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'nLog' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLogPfad' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferschein2x' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'nLagerAnzahl' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBeschreibung' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'nAuftragAendern' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSNAbfragen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEinstellungen */
	public $kEinstellungen;

	/** @var string cKopfPic */
	public $cKopfPic;

	/** @var string cDrucker */
	public $cDrucker;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var int nZahlungsziel */
	public $nZahlungsziel;

	/** @var string cFax */
	public $cFax;

	/** @var string cLagerbestand */
	public $cLagerbestand;

	/** @var string cLootSize */
	public $cLootSize;

	/** @var string cLagerKleinerNull */
	public $cLagerKleinerNull;

	/** @var string cFaxParam */
	public $cFaxParam;

	/** @var string cRechnung2x */
	public $cRechnung2x;

	/** @var string cRechnungsDrucker */
	public $cRechnungsDrucker;

	/** @var string cUSt */
	public $cUSt;

	/** @var string cEtikettDrucker */
	public $cEtikettDrucker;

	/** @var string nRunden */
	public $nRunden;

	/** @var int nLog */
	public $nLog;

	/** @var string cLogPfad */
	public $cLogPfad;

	/** @var string cLieferschein2x */
	public $cLieferschein2x;

	/** @var int nLagerAnzahl */
	public $nLagerAnzahl;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nAuftragAendern */
	public $nAuftragAendern;

	/** @var int nSNAbfragen */
	public $nSNAbfragen;
}
