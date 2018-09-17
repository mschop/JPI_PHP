<?php

namespace App\Schema;

class tCryptoVault
{
	const TABLE_NAME = 'tCryptoVault';
	const kCryptoVault = 'kCryptoVault';
	const nSlotId = 'nSlotId';
	const bDaten = 'bDaten';
	const bIv = 'bIv';

	/** @var int kCryptoVault */
	public $kCryptoVault;

	/** @var int nSlotId */
	public $nSlotId;

	/** @var resource bDaten */
	public $bDaten;

	/** @var resource bIv */
	public $bIv;
}
