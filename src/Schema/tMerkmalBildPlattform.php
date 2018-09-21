<?php

namespace App\Schema;

class tMerkmalBildPlattform
{
	const TABLE_NAME = 'tMerkmalBildPlattform';
	const kMerkmalBildPlattform = 'kMerkmalBildPlattform';
	const kMerkmal = 'kMerkmal';
	const kBild = 'kBild';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const nInet = 'nInet';
	const COLUMN_NAMES = ['kMerkmalBildPlattform', 'kMerkmal', 'kBild', 'kPlattform', 'kShop', 'nInet'];
	const COLUMN_TYPES = [
		'kMerkmalBildPlattform' => 'int',
		'kMerkmal' => 'int',
		'kBild' => 'int',
		'kPlattform' => 'int',
		'kShop' => 'int',
		'nInet' => 'tinyint',
	];

	/** @var int kMerkmalBildPlattform */
	public $kMerkmalBildPlattform;

	/** @var int kMerkmal */
	public $kMerkmal;

	/** @var int kBild */
	public $kBild;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var int nInet */
	public $nInet;
}
