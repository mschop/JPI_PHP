<?php

namespace App\Schema;

class tArtikelSonderpreis
{
	const TABLE_NAME = 'tArtikelSonderpreis';
	const kArtikelSonderpreis = 'kArtikelSonderpreis';
	const kArtikel = 'kArtikel';
	const nAktiv = 'nAktiv';
	const dStart = 'dStart';
	const nAnzahl = 'nAnzahl';
	const dEnde = 'dEnde';
	const nIstDatum = 'nIstDatum';
	const nIstAnzahl = 'nIstAnzahl';

	/** @var int kArtikelSonderpreis */
	public $kArtikelSonderpreis;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var string dStart */
	public $dStart;

	/** @var int nAnzahl */
	public $nAnzahl;

	/** @var string dEnde */
	public $dEnde;

	/** @var int nIstDatum */
	public $nIstDatum;

	/** @var int nIstAnzahl */
	public $nIstAnzahl;
}
