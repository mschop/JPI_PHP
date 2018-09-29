<?php

namespace App\Db\Schema;

class tLHM
{
	const TABLE_NAME = 'tLHM';
	const kLHM = 'kLHM';
	const kLHMTyp = 'kLHMTyp';
	const cLHMId = 'cLHMId';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kWarenlager = 'kWarenlager';
	const nSperre = 'nSperre';
	const kLHMStatus = 'kLHMStatus';
	const kBenutzer = 'kBenutzer';
	const dBearbeitet = 'dBearbeitet';
	const COLUMN_NAMES = [
		'kLHM',
		'kLHMTyp',
		'cLHMId',
		'kWarenLagerPlatz',
		'kWarenlager',
		'nSperre',
		'kLHMStatus',
		'kBenutzer',
		'dBearbeitet',
	];
	const COLUMN_DEFINITIONS = [
		'kLHM' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLHMTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLHMId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'kWarenLagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSperre' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLHMStatus' => [
			'type' => 'int',
			'phpType' => 'int',
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
		'dBearbeitet' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLHM */
	public $kLHM;

	/** @var int kLHMTyp */
	public $kLHMTyp;

	/** @var string cLHMId */
	public $cLHMId;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int nSperre */
	public $nSperre;

	/** @var int kLHMStatus */
	public $kLHMStatus;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dBearbeitet */
	public $dBearbeitet;
}
