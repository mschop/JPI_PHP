<?php

namespace App\Db\Schema;

class tCryptoVault
{
	const TABLE_NAME = 'tCryptoVault';
	const kCryptoVault = 'kCryptoVault';
	const nSlotId = 'nSlotId';
	const bDaten = 'bDaten';
	const bIv = 'bIv';
	const COLUMN_NAMES = ['kCryptoVault', 'nSlotId', 'bDaten', 'bIv'];
	const COLUMN_DEFINITIONS = [
		'kCryptoVault' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSlotId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bDaten' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
		'bIv' => [
			'type' => 'binary',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 16,
			'characterSetName' => null,
		],
	];

	/** @var int kCryptoVault */
	public $kCryptoVault;

	/** @var int nSlotId */
	public $nSlotId;

	/** @var resource bDaten */
	public $bDaten;

	/** @var resource bIv */
	public $bIv;
}
