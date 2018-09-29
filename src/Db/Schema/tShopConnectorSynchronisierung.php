<?php

namespace App\Db\Schema;

class tShopConnectorSynchronisierung
{
	const TABLE_NAME = 'tShopConnectorSynchronisierung';
	const kShop = 'kShop';
	const nEntity = 'nEntity';
	const nPush = 'nPush';
	const nPull = 'nPull';
	const nDelete = 'nDelete';
	const COLUMN_NAMES = ['kShop', 'nEntity', 'nPush', 'nPull', 'nDelete'];
	const COLUMN_DEFINITIONS = [
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEntity' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPush' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPull' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDelete' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kShop */
	public $kShop;

	/** @var int nEntity */
	public $nEntity;

	/** @var int nPush */
	public $nPush;

	/** @var int nPull */
	public $nPull;

	/** @var int nDelete */
	public $nDelete;
}
