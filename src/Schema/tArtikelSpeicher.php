<?php

namespace App\Schema;

class tArtikelSpeicher
{
	const TABLE_NAME = 'tArtikelSpeicher';
	const kArtikel = 'kArtikel';
	const cNummer = 'cNummer';
	const nID = 'nID';
	const nAktiv = 'nAktiv';
	const COLUMN_NAMES = ['kArtikel', 'cNummer', 'nID', 'nAktiv'];
	const COLUMN_TYPES = ['kArtikel' => 'int', 'cNummer' => 'varchar', 'nID' => 'tinyint', 'nAktiv' => 'tinyint'];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cNummer */
	public $cNummer;

	/** @var int nID */
	public $nID;

	/** @var int nAktiv */
	public $nAktiv;
}
