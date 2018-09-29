<?php

namespace App\Db\Schema;

class twebversand
{
	const TABLE_NAME = 'twebversand';
	const kWebVersand = 'kWebVersand';
	const cServerURL = 'cServerURL';
	const cBenutzerWeb = 'cBenutzerWeb';
	const cPasswortWeb = 'cPasswortWeb';
	const cServerFtp = 'cServerFtp';
	const cBenutzerFtp = 'cBenutzerFtp';
	const cPasswortFtp = 'cPasswortFtp';
	const cPASV = 'cPASV';
	const cAPIKEY = 'cAPIKEY';
	const cFTPPath = 'cFTPPath';
	const nHttpPut = 'nHttpPut';
	const nShopAuftragsNr = 'nShopAuftragsNr';
	const COLUMN_NAMES = [
		'kWebVersand',
		'cServerURL',
		'cBenutzerWeb',
		'cPasswortWeb',
		'cServerFtp',
		'cBenutzerFtp',
		'cPasswortFtp',
		'cPASV',
		'cAPIKEY',
		'cFTPPath',
		'nHttpPut',
		'nShopAuftragsNr',
	];
	const COLUMN_DEFINITIONS = [
		'kWebVersand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cServerURL' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBenutzerWeb' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cPasswortWeb' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cServerFtp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBenutzerFtp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cPasswortFtp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cPASV' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cAPIKEY' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cFTPPath' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nHttpPut' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nShopAuftragsNr' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWebVersand */
	public $kWebVersand;

	/** @var string cServerURL */
	public $cServerURL;

	/** @var string cBenutzerWeb */
	public $cBenutzerWeb;

	/** @var string cPasswortWeb */
	public $cPasswortWeb;

	/** @var string cServerFtp */
	public $cServerFtp;

	/** @var string cBenutzerFtp */
	public $cBenutzerFtp;

	/** @var string cPasswortFtp */
	public $cPasswortFtp;

	/** @var string cPASV */
	public $cPASV;

	/** @var string cAPIKEY */
	public $cAPIKEY;

	/** @var string cFTPPath */
	public $cFTPPath;

	/** @var int nHttpPut */
	public $nHttpPut;

	/** @var int nShopAuftragsNr */
	public $nShopAuftragsNr;
}
