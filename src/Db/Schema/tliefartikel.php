<?php

namespace App\Db\Schema;

class tliefartikel
{
	const TABLE_NAME = 'tliefartikel';
	const kLiefArtikel = 'kLiefArtikel';
	const tArtikel_kArtikel = 'tArtikel_kArtikel';
	const tLieferant_kLieferant = 'tLieferant_kLieferant';
	const fEKBrutto = 'fEKBrutto';
	const fEKNetto = 'fEKNetto';
	const cLiefArtNr = 'cLiefArtNr';
	const cWaehrung = 'cWaehrung';
	const cLiefFrist = 'cLiefFrist';
	const nLieferbar = 'nLieferbar';
	const cSonstiges = 'cSonstiges';
	const nStandard = 'nStandard';
	const nMindestAbnahme = 'nMindestAbnahme';
	const nAbnahmeIntervall = 'nAbnahmeIntervall';
	const fLagerbestand = 'fLagerbestand';
	const nLieferzeit = 'nLieferzeit';
	const nDropShipping = 'nDropShipping';
	const nDropShippingStandard = 'nDropShippingStandard';
	const cName = 'cName';
	const fDurchschnittlicheLieferzeit = 'fDurchschnittlicheLieferzeit';
	const nLagerBeachten = 'nLagerBeachten';
	const dLBGeaendert = 'dLBGeaendert';
	const cVPEEinheit = 'cVPEEinheit';
	const nVPEMenge = 'nVPEMenge';
	const fMwSt = 'fMwSt';
	const nLieferzeitAusLieferant = 'nLieferzeitAusLieferant';
	const COLUMN_NAMES = [
		'kLiefArtikel',
		'tArtikel_kArtikel',
		'tLieferant_kLieferant',
		'fEKBrutto',
		'fEKNetto',
		'cLiefArtNr',
		'cWaehrung',
		'cLiefFrist',
		'nLieferbar',
		'cSonstiges',
		'nStandard',
		'nMindestAbnahme',
		'nAbnahmeIntervall',
		'fLagerbestand',
		'nLieferzeit',
		'nDropShipping',
		'nDropShippingStandard',
		'cName',
		'fDurchschnittlicheLieferzeit',
		'nLagerBeachten',
		'dLBGeaendert',
		'cVPEEinheit',
		'nVPEMenge',
		'fMwSt',
		'nLieferzeitAusLieferant',
	];
	const COLUMN_DEFINITIONS = [
		'kLiefArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'tArtikel_kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'tLieferant_kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fEKBrutto' => [
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
		'cLiefArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cWaehrung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cLiefFrist' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nLieferbar' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSonstiges' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMindestAbnahme' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAbnahmeIntervall' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLagerbestand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLieferzeit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDropShipping' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDropShippingStandard' => [
			'type' => 'tinyint',
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
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fDurchschnittlicheLieferzeit' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLagerBeachten' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLBGeaendert' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVPEEinheit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nVPEMenge' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMwSt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLieferzeitAusLieferant' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLiefArtikel */
	public $kLiefArtikel;

	/** @var int tArtikel_kArtikel */
	public $tArtikel_kArtikel;

	/** @var int tLieferant_kLieferant */
	public $tLieferant_kLieferant;

	/** @var string fEKBrutto */
	public $fEKBrutto;

	/** @var string fEKNetto */
	public $fEKNetto;

	/** @var string cLiefArtNr */
	public $cLiefArtNr;

	/** @var string cWaehrung */
	public $cWaehrung;

	/** @var string cLiefFrist */
	public $cLiefFrist;

	/** @var int nLieferbar */
	public $nLieferbar;

	/** @var string cSonstiges */
	public $cSonstiges;

	/** @var int nStandard */
	public $nStandard;

	/** @var int nMindestAbnahme */
	public $nMindestAbnahme;

	/** @var string nAbnahmeIntervall */
	public $nAbnahmeIntervall;

	/** @var string fLagerbestand */
	public $fLagerbestand;

	/** @var int nLieferzeit */
	public $nLieferzeit;

	/** @var int nDropShipping */
	public $nDropShipping;

	/** @var int nDropShippingStandard */
	public $nDropShippingStandard;

	/** @var string cName */
	public $cName;

	/** @var string fDurchschnittlicheLieferzeit */
	public $fDurchschnittlicheLieferzeit;

	/** @var int nLagerBeachten */
	public $nLagerBeachten;

	/** @var string dLBGeaendert */
	public $dLBGeaendert;

	/** @var string cVPEEinheit */
	public $cVPEEinheit;

	/** @var int nVPEMenge */
	public $nVPEMenge;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var int nLieferzeitAusLieferant */
	public $nLieferzeitAusLieferant;
}
