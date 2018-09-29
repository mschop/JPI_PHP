<?php

namespace App\Db\Schema;

class tAbrechnung
{
	const TABLE_NAME = 'tAbrechnung';
	const kAbrechnung = 'kAbrechnung';
	const kBenutzer = 'kBenutzer';
	const kKunde = 'kKunde';
	const kFirma = 'kFirma';
	const kFulfillmentLieferant = 'kFulfillmentLieferant';
	const cAbrechnungsNummer = 'cAbrechnungsNummer';
	const cAnmerkung = 'cAnmerkung';
	const dAbrechnungVon = 'dAbrechnungVon';
	const dAbrechnungBis = 'dAbrechnungBis';
	const kBestellung = 'kBestellung';
	const dAuftragErstellt = 'dAuftragErstellt';
	const nStorno = 'nStorno';
	const COLUMN_NAMES = [
		'kAbrechnung',
		'kBenutzer',
		'kKunde',
		'kFirma',
		'kFulfillmentLieferant',
		'cAbrechnungsNummer',
		'cAnmerkung',
		'dAbrechnungVon',
		'dAbrechnungBis',
		'kBestellung',
		'dAuftragErstellt',
		'nStorno',
	];
	const COLUMN_DEFINITIONS = [
		'kAbrechnung' => [
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
		'kKunde' => [
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
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFulfillmentLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAbrechnungsNummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cAnmerkung' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
		'dAbrechnungVon' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAbrechnungBis' => [
			'type' => 'datetime',
			'phpType' => 'string',
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
		'dAuftragErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStorno' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAbrechnung */
	public $kAbrechnung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kFulfillmentLieferant */
	public $kFulfillmentLieferant;

	/** @var string cAbrechnungsNummer */
	public $cAbrechnungsNummer;

	/** @var resource cAnmerkung */
	public $cAnmerkung;

	/** @var string dAbrechnungVon */
	public $dAbrechnungVon;

	/** @var string dAbrechnungBis */
	public $dAbrechnungBis;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string dAuftragErstellt */
	public $dAuftragErstellt;

	/** @var int nStorno */
	public $nStorno;
}
