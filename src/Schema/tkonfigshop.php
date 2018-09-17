<?php

namespace App\Schema;

class tkonfigshop
{
	const TABLE_NAME = 'tkonfigshop';
	const kkonfiggruppe = 'kkonfiggruppe';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';

	/** @var int kkonfiggruppe */
	public $kkonfiggruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;
}
