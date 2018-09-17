<?php

namespace App\Schema;

class tLiefArtikelPreis
{
	const TABLE_NAME = 'tLiefArtikelPreis';
	const kLiefArtikelPreis = 'kLiefArtikelPreis';
	const kLiefArtikel = 'kLiefArtikel';
	const fAb = 'fAb';
	const fPreisNetto = 'fPreisNetto';

	/** @var int kLiefArtikelPreis */
	public $kLiefArtikelPreis;

	/** @var int kLiefArtikel */
	public $kLiefArtikel;

	/** @var string fAb */
	public $fAb;

	/** @var string fPreisNetto */
	public $fPreisNetto;
}
