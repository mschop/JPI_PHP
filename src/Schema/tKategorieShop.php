<?php

namespace App\Schema;

class tKategorieShop
{
	const TABLE_NAME = 'tKategorieShop';
	const kKategorie = 'kKategorie';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';
	const nInBearbeitung = 'nInBearbeitung';
	const COLUMN_NAMES = ['kKategorie', 'kShop', 'cInet', 'cDelInet', 'nInBearbeitung'];
	const COLUMN_TYPES = [
		'kKategorie' => 'int',
		'kShop' => 'int',
		'cInet' => 'char',
		'cDelInet' => 'char',
		'nInBearbeitung' => 'bit',
	];

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;

	/** @var boolean nInBearbeitung */
	public $nInBearbeitung;
}
