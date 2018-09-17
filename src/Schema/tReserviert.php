<?php

namespace App\Schema;

class tReserviert
{
	const TABLE_NAME = 'tReserviert';
	const kArtikel = 'kArtikel';
	const fAnzahl = 'fAnzahl';
	const kKey = 'kKey';
	const kPlattform = 'kPlattform';
	const kBestellung = 'kBestellung';
	const fBestandReserviert = 'fBestandReserviert';
	const fBestandReserviertEigen = 'fBestandReserviertEigen';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kKey */
	public $kKey;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string fBestandReserviert */
	public $fBestandReserviert;

	/** @var string fBestandReserviertEigen */
	public $fBestandReserviertEigen;
}