<?php

namespace App\Schema;

class tArtikelShop
{
	const TABLE_NAME = 'tArtikelShop';
	const kArtikel = 'kArtikel';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';
	const nAktion = 'nAktion';
	const nInBearbeitung = 'nInBearbeitung';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;

	/** @var int nAktion */
	public $nAktion;

	/** @var boolean nInBearbeitung */
	public $nInBearbeitung;
}
