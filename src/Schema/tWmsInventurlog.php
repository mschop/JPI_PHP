<?php

namespace App\Schema;

class tWmsInventurlog
{
	const TABLE_NAME = 'tWmsInventurlog';
	const kWmsInventurlog = 'kWmsInventurlog';
	const kWmsInventur = 'kWmsInventur';
	const kWarenlagerPlatz = 'kWarenlagerPlatz';
	const kArtikel = 'kArtikel';
	const dMHD = 'dMHD';
	const cCharge = 'cCharge';
	const fAnzahl = 'fAnzahl';
	const dZeitstempel = 'dZeitstempel';
	const kBenutzer = 'kBenutzer';
	const fDifferenz = 'fDifferenz';
	const nTyp = 'nTyp';

	/** @var int kWmsInventurlog */
	public $kWmsInventurlog;

	/** @var int kWmsInventur */
	public $kWmsInventur;

	/** @var int kWarenlagerPlatz */
	public $kWarenlagerPlatz;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string dMHD */
	public $dMHD;

	/** @var string cCharge */
	public $cCharge;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string fDifferenz */
	public $fDifferenz;

	/** @var int nTyp */
	public $nTyp;
}
