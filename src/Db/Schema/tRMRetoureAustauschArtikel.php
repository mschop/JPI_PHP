<?php

namespace App\Db\Schema;

class tRMRetoureAustauschArtikel
{
	const TABLE_NAME = 'tRMRetoureAustauschArtikel';
	const kRMRetoureAustauschArtikel = 'kRMRetoureAustauschArtikel';
	const kRMRetoure = 'kRMRetoure';
	const kArtikel = 'kArtikel';
	const fAnzahl = 'fAnzahl';
	const fVkPreis = 'fVkPreis';
	const fVkNetto = 'fVkNetto';
	const cHinweis = 'cHinweis';
	const fRabatt = 'fRabatt';
	const fMwSt = 'fMwSt';
	const COLUMN_NAMES = [
		'kRMRetoureAustauschArtikel',
		'kRMRetoure',
		'kArtikel',
		'fAnzahl',
		'fVkPreis',
		'fVkNetto',
		'cHinweis',
		'fRabatt',
		'fMwSt',
	];
	const COLUMN_DEFINITIONS = [
		'kRMRetoureAustauschArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMRetoure' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVkPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVkNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'fRabatt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMwSt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRMRetoureAustauschArtikel */
	public $kRMRetoureAustauschArtikel;

	/** @var int kRMRetoure */
	public $kRMRetoure;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fVkPreis */
	public $fVkPreis;

	/** @var string fVkNetto */
	public $fVkNetto;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var string fMwSt */
	public $fMwSt;
}
