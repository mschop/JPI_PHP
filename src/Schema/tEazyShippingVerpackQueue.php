<?php

namespace App\Schema;

class tEazyShippingVerpackQueue
{
	const TABLE_NAME = 'tEazyShippingVerpackQueue';
	const kBestellung = 'kBestellung';
	const dTimeStamp = 'dTimeStamp';

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string dTimeStamp */
	public $dTimeStamp;
}
