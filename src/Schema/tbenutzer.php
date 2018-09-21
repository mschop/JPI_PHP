<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kBenutzer' => 'int',
		'cLogin' => 'varchar',
		'cPasswort' => 'varchar',
		'cName' => 'varchar',
		'kFirma' => 'int',
		'cTel' => 'varchar',
		'cEMail' => 'varchar',
		'cAbteilung' => 'varchar',
		'cFax' => 'varchar',
		'cMobil' => 'varchar',
		'cHinweis' => 'varchar',
		'iSalt' => 'uniqueidentifier',
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
