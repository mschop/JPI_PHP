<?php

namespace App\Db\Schema;

class tVerfuegbarkeitsAnfrage
{
	const TABLE_NAME = 'tVerfuegbarkeitsAnfrage';
	const kVerfuegbarkeitsanfrage = 'kVerfuegbarkeitsanfrage';
	const kArtikel = 'kArtikel';
	const kShop = 'kShop';
	const cEMail = 'cEMail';
	const dDatum = 'dDatum';
	const cName = 'cName';
	const cVorname = 'cVorname';
	const cAnrede = 'cAnrede';
	const kInetVerfuegbarkeit = 'kInetVerfuegbarkeit';
	const nStatus = 'nStatus';
	const dBenachrichtigtAm = 'dBenachrichtigtAm';
	const COLUMN_NAMES = [
		'kVerfuegbarkeitsanfrage',
		'kArtikel',
		'kShop',
		'cEMail',
		'dDatum',
		'cName',
		'cVorname',
		'cAnrede',
		'kInetVerfuegbarkeit',
		'nStatus',
		'dBenachrichtigtAm',
	];
	const COLUMN_DEFINITIONS = [
		'kVerfuegbarkeitsanfrage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cEMail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
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
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cVorname' => [
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
		'kInetVerfuegbarkeit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dBenachrichtigtAm' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kVerfuegbarkeitsanfrage */
	public $kVerfuegbarkeitsanfrage;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kShop */
	public $kShop;

	/** @var string cEMail */
	public $cEMail;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cName */
	public $cName;

	/** @var string cVorname */
	public $cVorname;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var int kInetVerfuegbarkeit */
	public $kInetVerfuegbarkeit;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dBenachrichtigtAm */
	public $dBenachrichtigtAm;
}
