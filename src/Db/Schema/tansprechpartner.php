<?php

namespace App\Db\Schema;

class tansprechpartner
{
	const TABLE_NAME = 'tansprechpartner';
	const kAnsprechpartner = 'kAnsprechpartner';
	const kLieferant = 'kLieferant';
	const kKunde = 'kKunde';
	const cName = 'cName';
	const cTel = 'cTel';
	const cFax = 'cFax';
	const cMail = 'cMail';
	const cAbteilung = 'cAbteilung';
	const cVorName = 'cVorName';
	const cAnrede = 'cAnrede';
	const cMobil = 'cMobil';
	const COLUMN_NAMES = [
		'kAnsprechpartner',
		'kLieferant',
		'kKunde',
		'cName',
		'cTel',
		'cFax',
		'cMail',
		'cAbteilung',
		'cVorName',
		'cAnrede',
		'cMobil',
	];
	const COLUMN_DEFINITIONS = [
		'kAnsprechpartner' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cTel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cFax' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cMail' => [
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
		'cVorName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAnrede' => [
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
	];

	/** @var int kAnsprechpartner */
	public $kAnsprechpartner;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cName */
	public $cName;

	/** @var string cTel */
	public $cTel;

	/** @var string cFax */
	public $cFax;

	/** @var string cMail */
	public $cMail;

	/** @var string cAbteilung */
	public $cAbteilung;

	/** @var string cVorName */
	public $cVorName;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cMobil */
	public $cMobil;
}
