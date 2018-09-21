<?php

namespace App\Schema;

class tMerkmalwertBildPlattform
{
	const TABLE_NAME = 'tMerkmalwertBildPlattform';
	const kMerkmalwertBildPlattform = 'kMerkmalwertBildPlattform';
	const kMerkmalwert = 'kMerkmalwert';
	const kBild = 'kBild';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const nInet = 'nInet';
	const COLUMN_NAMES = ['kMerkmalwertBildPlattform', 'kMerkmalwert', 'kBild', 'kPlattform', 'kShop', 'nInet'];
	const COLUMN_TYPES = [
		'kMerkmalwertBildPlattform' => 'int',
		'kMerkmalwert' => 'int',
		'kBild' => 'int',
		'kPlattform' => 'int',
		'kShop' => 'int',
		'nInet' => 'tinyint',
	];

	/** @var int kMerkmalwertBildPlattform */
	public $kMerkmalwertBildPlattform;

	/** @var int kMerkmalwert */
	public $kMerkmalwert;

	/** @var int kBild */
	public $kBild;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int nInet */
	public $nInet;
}
