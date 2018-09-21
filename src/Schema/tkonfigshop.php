<?php

namespace App\Schema;

class tkonfigshop
{
	const TABLE_NAME = 'tkonfigshop';
	const kkonfiggruppe = 'kkonfiggruppe';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';
	const COLUMN_NAMES = ['kkonfiggruppe', 'kShop', 'cInet', 'cDelInet'];
	const COLUMN_TYPES = ['kkonfiggruppe' => 'int', 'kShop' => 'int', 'cInet' => 'char', 'cDelInet' => 'char'];

	/** @var int kkonfiggruppe */
	public $kkonfiggruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;
}
