<?php

namespace App\Schema;

class tConnectorStuecklisteTemp
{
	const TABLE_NAME = 'tConnectorStuecklisteTemp';
	const kStueckliste = 'kStueckliste';
	const cVaterID = 'cVaterID';
	const kArtikelKind = 'kArtikelKind';
	const fAnzahl = 'fAnzahl';
	const COLUMN_NAMES = ['kStueckliste', 'cVaterID', 'kArtikelKind', 'fAnzahl'];
	const COLUMN_TYPES = ['kStueckliste' => 'int', 'cVaterID' => 'varchar', 'kArtikelKind' => 'int', 'fAnzahl' => 'decimal'];

	/** @var int kStueckliste */
	public $kStueckliste;

	/** @var string cVaterID */
	public $cVaterID;

	/** @var int kArtikelKind */
	public $kArtikelKind;

	/** @var string fAnzahl */
	public $fAnzahl;
}
