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
	const COLUMN_NAMES = ['kInventur', 'kArtikel', 'kWarenLagerPlatz', 'fAnzahl', 'dMHD', 'cCharge', 'cSeriennummer'];
	const COLUMN_TYPES = [
		'kInventur' => 'int',
		'kArtikel' => 'int',
		'kWarenLagerPlatz' => 'int',
		'fAnzahl' => 'decimal',
		'dMHD' => 'datetime',
		'cCharge' => 'varchar',
		'cSeriennummer' => 'varchar',
	];

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
