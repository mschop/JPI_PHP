<?php

namespace App\Schema;

class tEigenschaftWertPict
{
	const TABLE_NAME = 'tEigenschaftWertPict';
	const kEigenschaftWertPict = 'kEigenschaftWertPict';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kBild = 'kBild';
	const nInet = 'nInet';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kEigenschaftWertPict', 'kEigenschaftWert', 'kBild', 'nInet', 'kPlattform', 'kShop'];
	const COLUMN_TYPES = [
		'kEigenschaftWertPict' => 'int',
		'kEigenschaftWert' => 'int',
		'kBild' => 'int',
		'nInet' => 'tinyint',
		'kPlattform' => 'int',
		'kShop' => 'int',
	];

	/** @var int kEigenschaftWertPict */
	public $kEigenschaftWertPict;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kBild */
	public $kBild;

	/** @var int nInet */
	public $nInet;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;
}
