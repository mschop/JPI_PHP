<?php

namespace App\Schema;

class tHerstellerBildPlattform
{
	const TABLE_NAME = 'tHerstellerBildPlattform';
	const kHerstellerBildPlattform = 'kHerstellerBildPlattform';
	const kHersteller = 'kHersteller';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const kBild = 'kBild';
	const nInet = 'nInet';
	const COLUMN_NAMES = ['kHerstellerBildPlattform', 'kHersteller', 'kPlattform', 'kShop', 'kBild', 'nInet'];
	const COLUMN_TYPES = [
		'kHerstellerBildPlattform' => 'int',
		'kHersteller' => 'int',
		'kPlattform' => 'int',
		'kShop' => 'int',
		'kBild' => 'int',
		'nInet' => 'tinyint',
	];

	/** @var int kHerstellerBildPlattform */
	public $kHerstellerBildPlattform;

	/** @var int kHersteller */
	public $kHersteller;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int kBild */
	public $kBild;

	/** @var int nInet */
	public $nInet;
}
