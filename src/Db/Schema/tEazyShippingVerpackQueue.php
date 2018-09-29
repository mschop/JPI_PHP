<?php

namespace App\Db\Schema;

class tEazyShippingVerpackQueue
{
	const TABLE_NAME = 'tEazyShippingVerpackQueue';
	const kBestellung = 'kBestellung';
	const dTimeStamp = 'dTimeStamp';
	const COLUMN_NAMES = ['kBestellung', 'dTimeStamp'];
	const COLUMN_DEFINITIONS = [
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dTimeStamp' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string dTimeStamp */
	public $dTimeStamp;
}
