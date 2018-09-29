<?php

namespace App\Db\Schema;

class tbenutzer
{
	const TABLE_NAME = 'tbenutzer';
	const kBenutzer = 'kBenutzer';
	const cLogin = 'cLogin';
	const cPasswort = 'cPasswort';
	const cName = 'cName';
	const kFirma = 'kFirma';
	const cTel = 'cTel';
	const cEMail = 'cEMail';
	const cAbteilung = 'cAbteilung';
	const cFax = 'cFax';
	const cMobil = 'cMobil';
	const cHinweis = 'cHinweis';
	const iSalt = 'iSalt';
	const COLUMN_NAMES = [
		'kBenutzer',
		'cLogin',
		'cPasswort',
		'cName',
		'kFirma',
		'cTel',
		'cEMail',
		'cAbteilung',
		'cFax',
		'cMobil',
		'cHinweis',
		'iSalt',
	];
	const COLUMN_DEFINITIONS = [
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLogin' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 15,
			'characterSetName' => 'iso_1',
		],
		'cPasswort' => [
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
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cEMail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAbteilung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cFax' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cMobil' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'iSalt' => [
			'type' => 'uniqueidentifier',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cLogin */
	public $cLogin;

	/** @var string cPasswort */
	public $cPasswort;

	/** @var string cName */
	public $cName;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cTel */
	public $cTel;

	/** @var string cEMail */
	public $cEMail;

	/** @var string cAbteilung */
	public $cAbteilung;

	/** @var string cFax */
	public $cFax;

	/** @var string cMobil */
	public $cMobil;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string iSalt */
	public $iSalt;
}
