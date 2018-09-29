<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kBestellungAlt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellungNeu' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBestellNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'kInetBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVersandInfo' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dVersandt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cIdentCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 25,
			'characterSetName' => 'iso_1',
		],
		'dLieferDatum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'kBestellHinweis' => [
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
		'kLogistik' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlatform' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGutschein' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cInetBestellung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
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
