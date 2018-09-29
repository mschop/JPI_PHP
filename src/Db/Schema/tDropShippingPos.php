<?php

namespace App\Db\Schema;

class tDropShippingPos
{
	const TABLE_NAME = 'tDropShippingPos';
	const kBestellPos = 'kBestellPos';
	const kLieferantenBEstellungPos = 'kLieferantenBEstellungPos';
	const COLUMN_NAMES = ['kBestellPos', 'kLieferantenBEstellungPos'];
	const COLUMN_DEFINITIONS = [
		'kBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBEstellungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kLieferantenBEstellungPos */
	public $kLieferantenBEstellungPos;
}
