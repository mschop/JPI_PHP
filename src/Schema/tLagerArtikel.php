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
