<?php

namespace App\Schema;

class tMedienFile
{
	const TABLE_NAME = 'tMedienFile';
	const kMedienFile = 'kMedienFile';
	const kMedienDir = 'kMedienDir';
	const cName = 'cName';
	const nSize = 'nSize';
	const dTime = 'dTime';
	const nDel = 'nDel';
	const kShop = 'kShop';

	/** @var int kMedienFile */
	public $kMedienFile;

	/** @var int kMedienDir */
	public $kMedienDir;

	/** @var string cName */
	public $cName;

	/** @var int nSize */
	public $nSize;

	/** @var string dTime */
	public $dTime;

	/** @var int nDel */
	public $nDel;

	/** @var int kShop */
	public $kShop;
}
