<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kZahlungseingang' => 'int',
		'kInetBestellung' => 'int',
		'kShop' => 'int',
		'kZahlung' => 'int',
		'cZahlungsanbieter' => 'varchar',
		'fBetrag' => 'decimal',
		'fZahlungsgebuehr' => 'decimal',
		'cISO' => 'varchar',
		'cEmpfaenger' => 'varchar',
		'cZahler' => 'varchar',
		'dZeit' => 'varchar',
		'cHinweis' => 'varchar',
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
