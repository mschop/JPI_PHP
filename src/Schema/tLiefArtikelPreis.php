<?php

namespace App\Schema;

class tLiefArtikelPreis
{
	const TABLE_NAME = 'tLiefArtikelPreis';
	const kLiefArtikelPreis = 'kLiefArtikelPreis';
	const kLiefArtikel = 'kLiefArtikel';
	const fAb = 'fAb';
	const fPreisNetto = 'fPreisNetto';
	const COLUMN_NAMES = ['kLiefArtikelPreis', 'kLiefArtikel', 'fAb', 'fPreisNetto'];
	const COLUMN_TYPES = [
		'kLiefArtikelPreis' => 'int',
		'kLiefArtikel' => 'int',
		'fAb' => 'decimal',
		'fPreisNetto' => 'decimal',
	];

	/** @var int kLiefArtikelPreis */
	public $kLiefArtikelPreis;

	/** @var int kLiefArtikel */
	public $kLiefArtikel;

	/** @var string fAb */
	public $fAb;

	/** @var string fPreisNetto */
	public $fPreisNetto;
}
