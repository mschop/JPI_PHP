<?php

namespace App\Schema;

class tMedienDateiShop
{
	const TABLE_NAME = 'tMedienDateiShop';
	const kMedienDatei = 'kMedienDatei';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';
	const COLUMN_NAMES = ['kMedienDatei', 'kShop', 'cInet', 'cDelInet'];
	const COLUMN_TYPES = ['kMedienDatei' => 'int', 'kShop' => 'int', 'cInet' => 'char', 'cDelInet' => 'char'];

	/** @var int kMedienDatei */
	public $kMedienDatei;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;
}
