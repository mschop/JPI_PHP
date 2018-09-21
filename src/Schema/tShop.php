<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kShop' => 'int',
		'cAPIKey' => 'varchar',
		'cName' => 'varchar',
		'cServerWeb' => 'varchar',
		'cBenutzerWeb' => 'varchar',
		'cPasswortWeb' => 'varchar',
		'nHttpPut' => 'tinyint',
		'nShopAuftragsNr' => 'tinyint',
		'nGesperrt' => 'tinyint',
		'kFirma' => 'int',
		'nAngebot' => 'tinyint',
		'kKategorie' => 'int',
		'nTyp' => 'tinyint',
		'kAlterShop' => 'int',
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
