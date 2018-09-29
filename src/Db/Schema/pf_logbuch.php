<?php

namespace App\Db\Schema;

class pf_logbuch
{
	const TABLE_NAME = 'pf_logbuch';
	const kLogbuch = 'kLogbuch';
	const kPlattform = 'kPlattform';
	const cKategorie = 'cKategorie';
	const cBetreff = 'cBetreff';
	const cLog = 'cLog';
	const dZeit = 'dZeit';
	const kUser = 'kUser';
	const COLUMN_NAMES = ['kLogbuch', 'kPlattform', 'cKategorie', 'cBetreff', 'cLog', 'dZeit', 'kUser'];
	const COLUMN_DEFINITIONS = [
		'kLogbuch' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKategorie' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cBetreff' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kUser' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLogbuch */
	public $kLogbuch;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cKategorie */
	public $cKategorie;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var string cLog */
	public $cLog;

	/** @var string dZeit */
	public $dZeit;

	/** @var int kUser */
	public $kUser;
}
