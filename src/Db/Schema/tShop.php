<?php

namespace App\Db\Schema;

class tShop
{
	const TABLE_NAME = 'tShop';
	const kShop = 'kShop';
	const cAPIKey = 'cAPIKey';
	const cName = 'cName';
	const cServerWeb = 'cServerWeb';
	const cBenutzerWeb = 'cBenutzerWeb';
	const cPasswortWeb = 'cPasswortWeb';
	const nHttpPut = 'nHttpPut';
	const nShopAuftragsNr = 'nShopAuftragsNr';
	const nGesperrt = 'nGesperrt';
	const kFirma = 'kFirma';
	const nAngebot = 'nAngebot';
	const kKategorie = 'kKategorie';
	const nTyp = 'nTyp';
	const kAlterShop = 'kAlterShop';
	const COLUMN_NAMES = [
		'kShop',
		'cAPIKey',
		'cName',
		'cServerWeb',
		'cBenutzerWeb',
		'cPasswortWeb',
		'nHttpPut',
		'nShopAuftragsNr',
		'nGesperrt',
		'kFirma',
		'nAngebot',
		'kKategorie',
		'nTyp',
		'kAlterShop',
	];
	const COLUMN_DEFINITIONS = [
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAPIKey' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cServerWeb' => [
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
			'characterMaximumLength' => 32,
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
		'nHttpPut' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nShopAuftragsNr' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nGesperrt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAngebot' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAlterShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kShop */
	public $kShop;

	/** @var string cAPIKey */
	public $cAPIKey;

	/** @var string cName */
	public $cName;

	/** @var string cServerWeb */
	public $cServerWeb;

	/** @var string cBenutzerWeb */
	public $cBenutzerWeb;

	/** @var string cPasswortWeb */
	public $cPasswortWeb;

	/** @var int nHttpPut */
	public $nHttpPut;

	/** @var int nShopAuftragsNr */
	public $nShopAuftragsNr;

	/** @var int nGesperrt */
	public $nGesperrt;

	/** @var int kFirma */
	public $kFirma;

	/** @var int nAngebot */
	public $nAngebot;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int nTyp */
	public $nTyp;

	/** @var int kAlterShop */
	public $kAlterShop;
}
