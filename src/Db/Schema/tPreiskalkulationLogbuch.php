<?php

namespace App\Db\Schema;

class tPreiskalkulationLogbuch
{
	const TABLE_NAME = 'tPreiskalkulationLogbuch';
	const kLogbuch = 'kLogbuch';
	const cPlattform = 'cPlattform';
	const cKategorie = 'cKategorie';
	const cBetreff = 'cBetreff';
	const cLog = 'cLog';
	const dZeit = 'dZeit';
	const cArtikel = 'cArtikel';
	const cArtNr = 'cArtNr';
	const kUSer = 'kUSer';
	const COLUMN_NAMES = ['kLogbuch', 'cPlattform', 'cKategorie', 'cBetreff', 'cLog', 'dZeit', 'cArtikel', 'cArtNr', 'kUSer'];
	const COLUMN_DEFINITIONS = [
		'kLogbuch' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPlattform' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
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
			'characterMaximumLength' => 255,
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
		'cArtikel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kUSer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLogbuch */
	public $kLogbuch;

	/** @var string cPlattform */
	public $cPlattform;

	/** @var string cKategorie */
	public $cKategorie;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var string cLog */
	public $cLog;

	/** @var string dZeit */
	public $dZeit;

	/** @var string cArtikel */
	public $cArtikel;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var int kUSer */
	public $kUSer;
}
