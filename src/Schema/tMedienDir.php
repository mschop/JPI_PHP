<?php

namespace App\Schema;

class tMedienDir
{
	const TABLE_NAME = 'tMedienDir';
	const kMedienDir = 'kMedienDir';
	const cName = 'cName';
	const kParentDir = 'kParentDir';
	const nDel = 'nDel';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kMedienDir', 'cName', 'kParentDir', 'nDel', 'kShop'];
	const COLUMN_TYPES = [
		'kMedienDir' => 'int',
		'cName' => 'varchar',
		'kParentDir' => 'int',
		'nDel' => 'smallint',
		'kShop' => 'int',
	];

	/** @var int kMedienDir */
	public $kMedienDir;

	/** @var string cName */
	public $cName;

	/** @var int kParentDir */
	public $kParentDir;

	/** @var int nDel */
	public $nDel;

	/** @var int kShop */
	public $kShop;
}
