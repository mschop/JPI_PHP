<?php

namespace App\Db\Schema;

class tInetShopZahlung
{
	const TABLE_NAME = 'tInetShopZahlung';
	const kZahlungseingang = 'kZahlungseingang';
	const kInetBestellung = 'kInetBestellung';
	const kShop = 'kShop';
	const kZahlung = 'kZahlung';
	const cZahlungsanbieter = 'cZahlungsanbieter';
	const fBetrag = 'fBetrag';
	const fZahlungsgebuehr = 'fZahlungsgebuehr';
	const cISO = 'cISO';
	const cEmpfaenger = 'cEmpfaenger';
	const cZahler = 'cZahler';
	const dZeit = 'dZeit';
	const cHinweis = 'cHinweis';
	const COLUMN_NAMES = [
		'kZahlungseingang',
		'kInetBestellung',
		'kShop',
		'kZahlung',
		'cZahlungsanbieter',
		'fBetrag',
		'fZahlungsgebuehr',
		'cISO',
		'cEmpfaenger',
		'cZahler',
		'dZeit',
		'cHinweis',
	];
	const COLUMN_DEFINITIONS = [
		'kZahlungseingang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kInetBestellung' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZahlung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cZahlungsanbieter' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fBetrag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fZahlungsgebuehr' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cEmpfaenger' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cZahler' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dZeit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
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
	];

	/** @var int kZahlungseingang */
	public $kZahlungseingang;

	/** @var int kInetBestellung */
	public $kInetBestellung;

	/** @var int kShop */
	public $kShop;

	/** @var int kZahlung */
	public $kZahlung;

	/** @var string cZahlungsanbieter */
	public $cZahlungsanbieter;

	/** @var string fBetrag */
	public $fBetrag;

	/** @var string fZahlungsgebuehr */
	public $fZahlungsgebuehr;

	/** @var string cISO */
	public $cISO;

	/** @var string cEmpfaenger */
	public $cEmpfaenger;

	/** @var string cZahler */
	public $cZahler;

	/** @var string dZeit */
	public $dZeit;

	/** @var string cHinweis */
	public $cHinweis;
}
