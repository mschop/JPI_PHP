<?php

namespace App\Db\Schema;

class tLagerArtikel
{
	const TABLE_NAME = 'tLagerArtikel';
	const kLagerArtikel = 'kLagerArtikel';
	const kLager = 'kLager';
	const kLagerOrt = 'kLagerOrt';
	const kArtikel = 'kArtikel';
	const cSeriennr = 'cSeriennr';
	const fEK = 'fEK';
	const cBeschreibung1 = 'cBeschreibung1';
	const cBeschreibung2 = 'cBeschreibung2';
	const kBestellPos = 'kBestellPos';
	const kLieferscheinPos = 'kLieferscheinPos';
	const kLieferant = 'kLieferant';
	const kWarenlager = 'kWarenlager';
	const kLieferantenbestellung = 'kLieferantenbestellung';
	const kPicklistePos = 'kPicklistePos';
	const kRMRetourePos = 'kRMRetourePos';
	const COLUMN_NAMES = [
		'kLagerArtikel',
		'kLager',
		'kLagerOrt',
		'kArtikel',
		'cSeriennr',
		'fEK',
		'cBeschreibung1',
		'cBeschreibung2',
		'kBestellPos',
		'kLieferscheinPos',
		'kLieferant',
		'kWarenlager',
		'kLieferantenbestellung',
		'kPicklistePos',
		'kRMRetourePos',
	];
	const COLUMN_DEFINITIONS = [
		'kLagerArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLagerOrt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'cSeriennr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
		'fEK' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBeschreibung1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cBeschreibung2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'kBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferscheinPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenbestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPicklistePos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMRetourePos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLagerArtikel */
	public $kLagerArtikel;

	/** @var int kLager */
	public $kLager;

	/** @var int kLagerOrt */
	public $kLagerOrt;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cSeriennr */
	public $cSeriennr;

	/** @var string fEK */
	public $fEK;

	/** @var string cBeschreibung1 */
	public $cBeschreibung1;

	/** @var string cBeschreibung2 */
	public $cBeschreibung2;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int kLieferantenbestellung */
	public $kLieferantenbestellung;

	/** @var int kPicklistePos */
	public $kPicklistePos;

	/** @var int kRMRetourePos */
	public $kRMRetourePos;
}
