<?php

namespace App\Schema;

class tInventur
{
	const TABLE_NAME = 'tInventur';
	const kInventur = 'kInventur';
	const kArtikel = 'kArtikel';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const fAnzahl = 'fAnzahl';
	const dMHD = 'dMHD';
	const cCharge = 'cCharge';
	const cSeriennummer = 'cSeriennummer';

	/** @var int kInventur */
	public $kInventur;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string dMHD */
	public $dMHD;

	/** @var string cCharge */
	public $cCharge;

	/** @var string cSeriennummer */
	public $cSeriennummer;
}
