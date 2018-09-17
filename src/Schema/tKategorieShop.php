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
