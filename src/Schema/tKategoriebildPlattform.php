<?php

namespace App\Schema;

class tKategoriebildPlattform
{
	const TABLE_NAME = 'tKategoriebildPlattform';
	const kKategoriebildPlattform = 'kKategoriebildPlattform';
	const kBild = 'kBild';
	const kKategorie = 'kKategorie';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const nNr = 'nNr';
	const nInet = 'nInet';
	const COLUMN_NAMES = ['kKategoriebildPlattform', 'kBild', 'kKategorie', 'kPlattform', 'kShop', 'nNr', 'nInet'];
	const COLUMN_TYPES = [
		'kKategoriebildPlattform' => 'int',
		'kBild' => 'int',
		'kKategorie' => 'int',
		'kPlattform' => 'int',
		'kShop' => 'int',
		'nNr' => 'int',
		'nInet' => 'tinyint',
	];

	/** @var int kKategoriebildPlattform */
	public $kKategoriebildPlattform;

	/** @var int kBild */
	public $kBild;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int nNr */
	public $nNr;

	/** @var int nInet */
	public $nInet;
}
