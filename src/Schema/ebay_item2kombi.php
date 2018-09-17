<?php

namespace App\Schema;

class ebay_item2kombi
{
	const TABLE_NAME = 'ebay_item2kombi';
	const kItem = 'kItem';
	const kEigenschaftKombi = 'kEigenschaftKombi';
	const fPreis = 'fPreis';
	const fAnzahl = 'fAnzahl';
	const fMaxAnzahl = 'fMaxAnzahl';
	const cEAN = 'cEAN';
	const fMinAnzahl = 'fMinAnzahl';
	const fStreichPreis = 'fStreichPreis';
	const cStreichPreisTyp = 'cStreichPreisTyp';

	/** @var int kItem */
	public $kItem;

	/** @var int kEigenschaftKombi */
	public $kEigenschaftKombi;

	/** @var string fPreis */
	public $fPreis;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fMaxAnzahl */
	public $fMaxAnzahl;

	/** @var string cEAN */
	public $cEAN;

	/** @var string fMinAnzahl */
	public $fMinAnzahl;

	/** @var string fStreichPreis */
	public $fStreichPreis;

	/** @var string cStreichPreisTyp */
	public $cStreichPreisTyp;
}
