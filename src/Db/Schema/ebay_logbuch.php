<?php

namespace App\Db\Schema;

class ebay_logbuch
{
	const TABLE_NAME = 'ebay_logbuch';
	const kEbayLogbuch = 'kEbayLogbuch';
	const kEbayuser = 'kEbayuser';
	const cBetreff = 'cBetreff';
	const nKategorie = 'nKategorie';
	const nTyp = 'nTyp';
	const cLog = 'cLog';
	const dZeit = 'dZeit';
	const COLUMN_NAMES = ['kEbayLogbuch', 'kEbayuser', 'cBetreff', 'nKategorie', 'nTyp', 'cLog', 'dZeit'];
	const COLUMN_DEFINITIONS = [
		'kEbayLogbuch' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayuser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBetreff' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLog' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'dZeit' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayLogbuch */
	public $kEbayLogbuch;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var int nKategorie */
	public $nKategorie;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cLog */
	public $cLog;

	/** @var string dZeit */
	public $dZeit;
}
