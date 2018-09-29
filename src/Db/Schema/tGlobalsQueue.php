<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'kKey' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'dTimeStamp' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
