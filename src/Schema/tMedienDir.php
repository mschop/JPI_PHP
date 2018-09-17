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
