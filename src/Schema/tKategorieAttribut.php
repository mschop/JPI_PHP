<?php

namespace App\Schema;

class tKategorieAttribut
{
	const TABLE_NAME = 'tKategorieAttribut';
	const kKategorieAttribut = 'kKategorieAttribut';
	const kKategorie = 'kKategorie';
	const kAttribut = 'kAttribut';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kKategorieAttribut', 'kKategorie', 'kAttribut', 'kShop'];
	const COLUMN_TYPES = ['kKategorieAttribut' => 'int', 'kKategorie' => 'int', 'kAttribut' => 'int', 'kShop' => 'int'];

	/** @var int kKategorieAttribut */
	public $kKategorieAttribut;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kAttribut */
	public $kAttribut;

	/** @var int kShop */
	public $kShop;
}
