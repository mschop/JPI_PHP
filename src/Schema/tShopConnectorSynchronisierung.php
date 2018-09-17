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
