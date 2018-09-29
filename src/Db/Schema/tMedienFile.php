<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = ['kMedienFile', 'kMedienDir', 'cName', 'nSize', 'dTime', 'nDel', 'kShop'];
	const COLUMN_DEFINITIONS = [
		'kMedienFile' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMedienDir' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSize' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dTime' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDel' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

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
