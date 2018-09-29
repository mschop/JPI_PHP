<?php

namespace App\Db\Schema;

class tZahlungsart
{
	const TABLE_NAME = 'tZahlungsart';
	const kZahlungsart = 'kZahlungsart';
	const cName = 'cName';
	const cPrtString = 'cPrtString';
	const nLastschrift = 'nLastschrift';
	const cPrtStringVor = 'cPrtStringVor';
	const cPaymentOption = 'cPaymentOption';
	const cKonto = 'cKonto';
	const nAusliefernVorZahlung = 'nAusliefernVorZahlung';
	const nPrioritaet = 'nPrioritaet';
	const nMahnwesenAktiv = 'nMahnwesenAktiv';
	const fSkontoWert = 'fSkontoWert';
	const nSkontoZeitraum = 'nSkontoZeitraum';
	const COLUMN_NAMES = [
		'kZahlungsart',
		'cName',
		'cPrtString',
		'nLastschrift',
		'cPrtStringVor',
		'cPaymentOption',
		'cKonto',
		'nAusliefernVorZahlung',
		'nPrioritaet',
		'nMahnwesenAktiv',
		'fSkontoWert',
		'nSkontoZeitraum',
	];
	const COLUMN_DEFINITIONS = [
		'kZahlungsart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
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
		'cPrtString' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nLastschrift' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPrtStringVor' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cPaymentOption' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'nAusliefernVorZahlung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPrioritaet' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMahnwesenAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fSkontoWert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSkontoZeitraum' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kZahlungsart */
	public $kZahlungsart;

	/** @var string cName */
	public $cName;

	/** @var string cPrtString */
	public $cPrtString;

	/** @var int nLastschrift */
	public $nLastschrift;

	/** @var string cPrtStringVor */
	public $cPrtStringVor;

	/** @var string cPaymentOption */
	public $cPaymentOption;

	/** @var string cKonto */
	public $cKonto;

	/** @var int nAusliefernVorZahlung */
	public $nAusliefernVorZahlung;

	/** @var int nPrioritaet */
	public $nPrioritaet;

	/** @var int nMahnwesenAktiv */
	public $nMahnwesenAktiv;

	/** @var string fSkontoWert */
	public $fSkontoWert;

	/** @var int nSkontoZeitraum */
	public $nSkontoZeitraum;
}
