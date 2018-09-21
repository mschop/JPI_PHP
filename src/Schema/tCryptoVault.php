<?php

namespace App\Schema;

class tCryptoVault
{
	const TABLE_NAME = 'tCryptoVault';
	const kCryptoVault = 'kCryptoVault';
	const nSlotId = 'nSlotId';
	const bDaten = 'bDaten';
	const bIv = 'bIv';
	const COLUMN_NAMES = ['kCryptoVault', 'nSlotId', 'bDaten', 'bIv'];
	const COLUMN_TYPES = ['kCryptoVault' => 'int', 'nSlotId' => 'int', 'bDaten' => 'varbinary', 'bIv' => 'binary'];

	/** @var int kCryptoVault */
	public $kCryptoVault;

	/** @var int nSlotId */
	public $nSlotId;

	/** @var resource bDaten */
	public $bDaten;

	/** @var resource bIv */
	public $bIv;
}
