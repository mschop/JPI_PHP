<?php

namespace App\Db\Schema;

class teigenschaftwert
{
	const TABLE_NAME = 'teigenschaftwert';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kEigenschaft = 'kEigenschaft';
	const fAufpreis = 'fAufpreis';
	const fAufpreisNetto = 'fAufpreisNetto';
	const fGewichtDiff = 'fGewichtDiff';
	const cArtNr = 'cArtNr';
	const nSort = 'nSort';
	const fLagerbestand = 'fLagerbestand';
	const fPackeinheit = 'fPackeinheit';
	const cBarcode = 'cBarcode';
	const cAktiv = 'cAktiv';
	const cInet = 'cInet';
	const COLUMN_NAMES = [
		'kEigenschaftWert',
		'kEigenschaft',
		'fAufpreis',
		'fAufpreisNetto',
		'fGewichtDiff',
		'cArtNr',
		'nSort',
		'fLagerbestand',
		'fPackeinheit',
		'cBarcode',
		'cAktiv',
		'cInet',
	];
	const COLUMN_DEFINITIONS = [
		'kEigenschaftWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAufpreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAufpreisNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGewichtDiff' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
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
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
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
		'fPackeinheit' => [
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
		'cAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var string fAufpreis */
	public $fAufpreis;

	/** @var string fAufpreisNetto */
	public $fAufpreisNetto;

	/** @var string fGewichtDiff */
	public $fGewichtDiff;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var int nSort */
	public $nSort;

	/** @var string fLagerbestand */
	public $fLagerbestand;

	/** @var string fPackeinheit */
	public $fPackeinheit;

	/** @var string cBarcode */
	public $cBarcode;

	/** @var string cAktiv */
	public $cAktiv;

	/** @var string cInet */
	public $cInet;
}
