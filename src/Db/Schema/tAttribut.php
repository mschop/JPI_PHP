<?php

namespace App\Db\Schema;

class tAttribut
{
	const TABLE_NAME = 'tAttribut';
	const kAttribut = 'kAttribut';
	const nIstMehrsprachig = 'nIstMehrsprachig';
	const nIstFreifeld = 'nIstFreifeld';
	const nSortierung = 'nSortierung';
	const cBeschreibung = 'cBeschreibung';
	const nBezugstyp = 'nBezugstyp';
	const nAusgabeweg = 'nAusgabeweg';
	const nIstStandard = 'nIstStandard';
	const kFeldTyp = 'kFeldTyp';
	const cRegEx = 'cRegEx';
	const cGruppeName = 'cGruppeName';
	const nReadOnly = 'nReadOnly';
	const COLUMN_NAMES = [
		'kAttribut',
		'nIstMehrsprachig',
		'nIstFreifeld',
		'nSortierung',
		'cBeschreibung',
		'nBezugstyp',
		'nAusgabeweg',
		'nIstStandard',
		'kFeldTyp',
		'cRegEx',
		'cGruppeName',
		'nReadOnly',
	];
	const COLUMN_DEFINITIONS = [
		'kAttribut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstMehrsprachig' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstFreifeld' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSortierung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'nBezugstyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAusgabeweg' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFeldTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRegEx' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
		'cGruppeName' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 150,
			'characterSetName' => 'UNICODE',
		],
		'nReadOnly' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAttribut */
	public $kAttribut;

	/** @var int nIstMehrsprachig */
	public $nIstMehrsprachig;

	/** @var int nIstFreifeld */
	public $nIstFreifeld;

	/** @var int nSortierung */
	public $nSortierung;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nBezugstyp */
	public $nBezugstyp;

	/** @var int nAusgabeweg */
	public $nAusgabeweg;

	/** @var int nIstStandard */
	public $nIstStandard;

	/** @var int kFeldTyp */
	public $kFeldTyp;

	/** @var resource cRegEx */
	public $cRegEx;

	/** @var resource cGruppeName */
	public $cGruppeName;

	/** @var int nReadOnly */
	public $nReadOnly;
}
