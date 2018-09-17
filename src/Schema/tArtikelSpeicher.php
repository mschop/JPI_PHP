<?php

namespace App\Schema;

class tArtikelSpeicher
{
	const TABLE_NAME = 'tArtikelSpeicher';
	const kArtikel = 'kArtikel';
	const cNummer = 'cNummer';
	const nID = 'nID';
	const nAktiv = 'nAktiv';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cNummer */
	public $cNummer;

	/** @var int nID */
	public $nID;

	/** @var int nAktiv */
	public $nAktiv;
}
