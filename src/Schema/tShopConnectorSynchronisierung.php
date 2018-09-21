<?php

namespace App\Schema;

class tShopConnectorSynchronisierung
{
	const TABLE_NAME = 'tShopConnectorSynchronisierung';
	const kShop = 'kShop';
	const nEntity = 'nEntity';
	const nPush = 'nPush';
	const nPull = 'nPull';
	const nDelete = 'nDelete';
	const COLUMN_NAMES = ['kShop', 'nEntity', 'nPush', 'nPull', 'nDelete'];
	const COLUMN_TYPES = [
		'kShop' => 'int',
		'nEntity' => 'int',
		'nPush' => 'tinyint',
		'nPull' => 'tinyint',
		'nDelete' => 'tinyint',
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
