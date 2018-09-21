<?php

namespace App\Schema;

class tBestellungAlt
{
	const TABLE_NAME = 'tBestellungAlt';
	const kBestellungAlt = 'kBestellungAlt';
	const kBestellungNeu = 'kBestellungNeu';
	const cBestellNr = 'cBestellNr';
	const dErstellt = 'dErstellt';
	const kInetBestellung = 'kInetBestellung';
	const cVersandInfo = 'cVersandInfo';
	const dVersandt = 'dVersandt';
	const cIdentCode = 'cIdentCode';
	const dLieferDatum = 'dLieferDatum';
	const kBestellHinweis = 'kBestellHinweis';
	const kShop = 'kShop';
	const kLogistik = 'kLogistik';
	const nPlatform = 'nPlatform';
	const fGutschein = 'fGutschein';
	const cInetBestellung = 'cInetBestellung';
	const cStatus = 'cStatus';
	const COLUMN_NAMES = [
		'kBestellungAlt',
		'kBestellungNeu',
		'cBestellNr',
		'dErstellt',
		'kInetBestellung',
		'cVersandInfo',
		'dVersandt',
		'cIdentCode',
		'dLieferDatum',
		'kBestellHinweis',
		'kShop',
		'kLogistik',
		'nPlatform',
		'fGutschein',
		'cInetBestellung',
		'cStatus',
	];
	const COLUMN_TYPES = [
		'kBestellungAlt' => 'int',
		'kBestellungNeu' => 'int',
		'cBestellNr' => 'varchar',
		'dErstellt' => 'varchar',
		'kInetBestellung' => 'int',
		'cVersandInfo' => 'varchar',
		'dVersandt' => 'varchar',
		'cIdentCode' => 'varchar',
		'dLieferDatum' => 'varchar',
		'kBestellHinweis' => 'int',
		'kShop' => 'int',
		'kLogistik' => 'int',
		'nPlatform' => 'tinyint',
		'fGutschein' => 'decimal',
		'cInetBestellung' => 'varchar',
		'cStatus' => 'varchar',
	];

	/** @var int kBestellungAlt */
	public $kBestellungAlt;

	/** @var int kBestellungNeu */
	public $kBestellungNeu;

	/** @var string cBestellNr */
	public $cBestellNr;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kInetBestellung */
	public $kInetBestellung;

	/** @var string cVersandInfo */
	public $cVersandInfo;

	/** @var string dVersandt */
	public $dVersandt;

	/** @var string cIdentCode */
	public $cIdentCode;

	/** @var string dLieferDatum */
	public $dLieferDatum;

	/** @var int kBestellHinweis */
	public $kBestellHinweis;

	/** @var int kShop */
	public $kShop;

	/** @var int kLogistik */
	public $kLogistik;

	/** @var int nPlatform */
	public $nPlatform;

	/** @var string fGutschein */
	public $fGutschein;

	/** @var string cInetBestellung */
	public $cInetBestellung;

	/** @var string cStatus */
	public $cStatus;
}
