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
	const COLUMN_NAMES = ['kShop', 'nType', 'cName', 'kKey', 'cText', 'dTimeStamp'];
	const COLUMN_TYPES = [
		'kShop' => 'int',
		'nType' => 'tinyint',
		'cName' => 'varchar',
		'kKey' => 'int',
		'cText' => 'varchar',
		'dTimeStamp' => 'datetime',
	];

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
