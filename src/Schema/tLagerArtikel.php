<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kLagerArtikel' => 'int',
		'kLager' => 'int',
		'kLagerOrt' => 'int',
		'kArtikel' => 'int',
		'cSeriennr' => 'varchar',
		'fEK' => 'decimal',
		'cBeschreibung1' => 'varchar',
		'cBeschreibung2' => 'varchar',
		'kBestellPos' => 'int',
		'kLieferscheinPos' => 'int',
		'kLieferant' => 'int',
		'kWarenlager' => 'int',
		'kLieferantenbestellung' => 'int',
		'kPicklistePos' => 'int',
		'kRMRetourePos' => 'int',
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
