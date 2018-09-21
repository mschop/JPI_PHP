<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kEigenschaftWert' => 'int',
		'kEigenschaft' => 'int',
		'fAufpreis' => 'decimal',
		'fAufpreisNetto' => 'decimal',
		'fGewichtDiff' => 'decimal',
		'cArtNr' => 'varchar',
		'nSort' => 'int',
		'fLagerbestand' => 'decimal',
		'fPackeinheit' => 'decimal',
		'cBarcode' => 'varchar',
		'cAktiv' => 'char',
		'cInet' => 'char',
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
