<?php

namespace App\Db\Schema;

class tWaehrung
{
	const TABLE_NAME = 'tWaehrung';
	const kWaehrung = 'kWaehrung';
	const cName = 'cName';
	const cNameHTML = 'cNameHTML';
	const fFaktor = 'fFaktor';
	const cEAMapping = 'cEAMapping';
	const nStandard = 'nStandard';
	const nVorBetrag = 'nVorBetrag';
	const cTrennzeichenCent = 'cTrennzeichenCent';
	const cTrennzeichenTausend = 'cTrennzeichenTausend';
	const dAktualisiert = 'dAktualisiert';
	const COLUMN_NAMES = [
		'kWaehrung',
		'cName',
		'cNameHTML',
		'fFaktor',
		'cEAMapping',
		'nStandard',
		'nVorBetrag',
		'cTrennzeichenCent',
		'cTrennzeichenTausend',
		'dAktualisiert',
	];
	const COLUMN_DEFINITIONS = [
		'kWaehrung' => [
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
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cNameHTML' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'fFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cEAMapping' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVorBetrag' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTrennzeichenCent' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cTrennzeichenTausend' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'dAktualisiert' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWaehrung */
	public $kWaehrung;

	/** @var string cName */
	public $cName;

	/** @var string cNameHTML */
	public $cNameHTML;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var string cEAMapping */
	public $cEAMapping;

	/** @var int nStandard */
	public $nStandard;

	/** @var int nVorBetrag */
	public $nVorBetrag;

	/** @var string cTrennzeichenCent */
	public $cTrennzeichenCent;

	/** @var string cTrennzeichenTausend */
	public $cTrennzeichenTausend;

	/** @var string dAktualisiert */
	public $dAktualisiert;
}
