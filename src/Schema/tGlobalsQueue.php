<?php

namespace App\Schema;

class tGlobalsQueue
{
	const TABLE_NAME = 'tGlobalsQueue';
	const kShop = 'kShop';
	const nType = 'nType';
	const cName = 'cName';
	const kKey = 'kKey';
	const cText = 'cText';
	const dTimeStamp = 'dTimeStamp';

	/** @var int kShop */
	public $kShop;

	/** @var int nType */
	public $nType;

	/** @var string cName */
	public $cName;

	/** @var int kKey */
	public $kKey;

	/** @var string cText */
	public $cText;

	/** @var string dTimeStamp */
	public $dTimeStamp;
}
