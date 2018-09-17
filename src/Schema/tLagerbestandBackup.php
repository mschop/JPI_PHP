<?php

namespace App\Schema;

class tLagerbestandBackup
{
	const TABLE_NAME = 'tLagerbestandBackup';
	const kArtikel = 'kArtikel';
	const fLagerbestand = 'fLagerbestand';
	const dErstellt = 'dErstellt';
	const cVersion = 'cVersion';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fLagerbestand */
	public $fLagerbestand;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cVersion */
	public $cVersion;
}
