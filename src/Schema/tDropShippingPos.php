<?php

namespace App\Schema;

class tDropShippingPos
{
	const TABLE_NAME = 'tDropShippingPos';
	const kBestellPos = 'kBestellPos';
	const kLieferantenBEstellungPos = 'kLieferantenBEstellungPos';

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kLieferantenBEstellungPos */
	public $kLieferantenBEstellungPos;
}
