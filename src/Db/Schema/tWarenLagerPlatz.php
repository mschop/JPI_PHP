<?php

namespace App\Db\Schema;

class tWarenLagerPlatz
{
	const TABLE_NAME = 'tWarenLagerPlatz';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kWarenLager = 'kWarenLager';
	const fGewichtMax = 'fGewichtMax';
	const cKommentar = 'cKommentar';
	const fLaenge = 'fLaenge';
	const fBreite = 'fBreite';
	const fHoehe = 'fHoehe';
	const nSort = 'nSort';
	const cName = 'cName';
	const kWarenLagerPlatzTyp = 'kWarenLagerPlatzTyp';
	const nStatus = 'nStatus';
	const dWmsInventurDatum = 'dWmsInventurDatum';
	const kWmsInventur = 'kWmsInventur';
	const nPreInvStatus = 'nPreInvStatus';
	const nInvGezaehlt = 'nInvGezaehlt';
	const nGesperrt = 'nGesperrt';
	const nPrio = 'nPrio';
	const COLUMN_NAMES = [
		'kWarenLagerPlatz',
		'kWarenLager',
		'fGewichtMax',
		'cKommentar',
		'fLaenge',
		'fBreite',
		'fHoehe',
		'nSort',
		'cName',
		'kWarenLagerPlatzTyp',
		'nStatus',
		'dWmsInventurDatum',
		'kWmsInventur',
		'nPreInvStatus',
		'nInvGezaehlt',
		'nGesperrt',
		'nPrio',
	];
	const COLUMN_DEFINITIONS = [
		'kWarenLagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGewichtMax' => [
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
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
		'fLaenge' => [
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
		'nSort' => [
			'type' => 'int',
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
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'kWarenLagerPlatzTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dWmsInventurDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWmsInventur' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPreInvStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nInvGezaehlt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nGesperrt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPrio' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var string fGewichtMax */
	public $fGewichtMax;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string fLaenge */
	public $fLaenge;

	/** @var string fBreite */
	public $fBreite;

	/** @var string fHoehe */
	public $fHoehe;

	/** @var int nSort */
	public $nSort;

	/** @var string cName */
	public $cName;

	/** @var int kWarenLagerPlatzTyp */
	public $kWarenLagerPlatzTyp;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dWmsInventurDatum */
	public $dWmsInventurDatum;

	/** @var int kWmsInventur */
	public $kWmsInventur;

	/** @var int nPreInvStatus */
	public $nPreInvStatus;

	/** @var int nInvGezaehlt */
	public $nInvGezaehlt;

	/** @var int nGesperrt */
	public $nGesperrt;

	/** @var int nPrio */
	public $nPrio;
}
