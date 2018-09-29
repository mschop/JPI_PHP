<?php

namespace App\Db\Schema;

class tDownload
{
	const TABLE_NAME = 'tDownload';
	const kDownload = 'kDownload';
	const cID = 'cID';
	const cPfad = 'cPfad';
	const cPfadVorschau = 'cPfadVorschau';
	const nAnzahl = 'nAnzahl';
	const nTage = 'nTage';
	const dErstellt = 'dErstellt';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kDownload', 'cID', 'cPfad', 'cPfadVorschau', 'nAnzahl', 'nTage', 'dErstellt', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kDownload' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPfad' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPfadVorschau' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nAnzahl' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTage' => [
			'type' => 'int',
			'phpType' => 'int',
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
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kDownload */
	public $kDownload;

	/** @var string cID */
	public $cID;

	/** @var string cPfad */
	public $cPfad;

	/** @var string cPfadVorschau */
	public $cPfadVorschau;

	/** @var int nAnzahl */
	public $nAnzahl;

	/** @var int nTage */
	public $nTage;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nSort */
	public $nSort;
}
