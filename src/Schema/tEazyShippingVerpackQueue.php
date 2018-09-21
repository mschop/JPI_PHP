<?php

namespace App\Schema;

class tEazyShippingVerpackQueue
{
	const TABLE_NAME = 'tEazyShippingVerpackQueue';
	const kBestellung = 'kBestellung';
	const dTimeStamp = 'dTimeStamp';
	const COLUMN_NAMES = ['kBestellung', 'dTimeStamp'];
	const COLUMN_TYPES = ['kBestellung' => 'int', 'dTimeStamp' => 'datetime'];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string dTimeStamp */
	public $dTimeStamp;
}
