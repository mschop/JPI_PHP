<?php

namespace App\Schema;

class tDropShippingPos
{
	const TABLE_NAME = 'tDropShippingPos';
	const kBestellPos = 'kBestellPos';
	const kLieferantenBEstellungPos = 'kLieferantenBEstellungPos';
	const COLUMN_NAMES = ['kBestellPos', 'kLieferantenBEstellungPos'];
	const COLUMN_TYPES = ['kBestellPos' => 'int', 'kLieferantenBEstellungPos' => 'int'];

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kLieferantenBEstellungPos */
	public $kLieferantenBEstellungPos;
}
