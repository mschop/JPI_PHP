<?php

namespace App\Db\Schema;

class tZahlungsErinnerung
{
	const TABLE_NAME = 'tZahlungsErinnerung';
	const kZahlungsErinnerung = 'kZahlungsErinnerung';
	const kRechnung = 'kRechnung';
	const kMahnstufe = 'kMahnstufe';
	const kFirma = 'kFirma';
	const kKundengruppe = 'kKundengruppe';
	const nMahnstufeAktuell = 'nMahnstufeAktuell';
	const dZahlungsfrist = 'dZahlungsfrist';
	const dErstellt = 'dErstellt';
	const dMahndatum = 'dMahndatum';
	const dErledigt = 'dErledigt';
	const fGebuehr = 'fGebuehr';
	const nKarenzzeit = 'nKarenzzeit';
	const nZahlungsfristInTagen = 'nZahlungsfristInTagen';
	const fGebuehrPauschal = 'fGebuehrPauschal';
	const fGebuehrZinssatz = 'fGebuehrZinssatz';
	const cKommentar = 'cKommentar';
	const fBruttoBetrag = 'fBruttoBetrag';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = [
		'kZahlungsErinnerung',
		'kRechnung',
		'kMahnstufe',
		'kFirma',
		'kKundengruppe',
		'nMahnstufeAktuell',
		'dZahlungsfrist',
		'dErstellt',
		'dMahndatum',
		'dErledigt',
		'fGebuehr',
		'nKarenzzeit',
		'nZahlungsfristInTagen',
		'fGebuehrPauschal',
		'fGebuehrZinssatz',
		'cKommentar',
		'fBruttoBetrag',
		'kBenutzer',
	];
	const COLUMN_DEFINITIONS = [
		'kZahlungsErinnerung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMahnstufe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMahnstufeAktuell' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZahlungsfrist' => [
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
		'dMahndatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErledigt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGebuehr' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKarenzzeit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZahlungsfristInTagen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGebuehrPauschal' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGebuehrZinssatz' => [
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
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'fBruttoBetrag' => [
			'type' => 'decimal',
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
	];

	/** @var int kZahlungsErinnerung */
	public $kZahlungsErinnerung;

	/** @var int kRechnung */
	public $kRechnung;

	/** @var int kMahnstufe */
	public $kMahnstufe;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var int nMahnstufeAktuell */
	public $nMahnstufeAktuell;

	/** @var string dZahlungsfrist */
	public $dZahlungsfrist;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dMahndatum */
	public $dMahndatum;

	/** @var string dErledigt */
	public $dErledigt;

	/** @var string fGebuehr */
	public $fGebuehr;

	/** @var int nKarenzzeit */
	public $nKarenzzeit;

	/** @var int nZahlungsfristInTagen */
	public $nZahlungsfristInTagen;

	/** @var string fGebuehrPauschal */
	public $fGebuehrPauschal;

	/** @var string fGebuehrZinssatz */
	public $fGebuehrZinssatz;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string fBruttoBetrag */
	public $fBruttoBetrag;

	/** @var int kBenutzer */
	public $kBenutzer;
}
