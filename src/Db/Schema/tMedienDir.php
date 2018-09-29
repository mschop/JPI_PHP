<?php

namespace App\Db\Schema;

class tMedienDir
{
	const TABLE_NAME = 'tMedienDir';
	const kMedienDir = 'kMedienDir';
	const cName = 'cName';
	const kParentDir = 'kParentDir';
	const nDel = 'nDel';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kMedienDir', 'cName', 'kParentDir', 'nDel', 'kShop'];
	const COLUMN_DEFINITIONS = [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kParentDir' => [
			'type' => 'int',
			'phpType' => 'int',
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
