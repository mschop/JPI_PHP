<?php

namespace App\Schema;

class tCryptoSlot
{
	const TABLE_NAME = 'tCryptoSlot';
	const kCryptoSlot = 'kCryptoSlot';
	const nSlotId = 'nSlotId';
	const kBenutzer = 'kBenutzer';
	const bCryptedSlotkey = 'bCryptedSlotkey';
	const kBenutzerZugewiesenDurch = 'kBenutzerZugewiesenDurch';
	const COLUMN_NAMES = ['kCryptoSlot', 'nSlotId', 'kBenutzer', 'bCryptedSlotkey', 'kBenutzerZugewiesenDurch'];
	const COLUMN_TYPES = [
		'kCryptoSlot' => 'int',
		'nSlotId' => 'int',
		'kBenutzer' => 'int',
		'bCryptedSlotkey' => 'varbinary',
		'kBenutzerZugewiesenDurch' => 'int',
	];

	/** @var int kCryptoSlot */
	public $kCryptoSlot;

	/** @var int nSlotId */
	public $nSlotId;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var resource bCryptedSlotkey */
	public $bCryptedSlotkey;

	/** @var int kBenutzerZugewiesenDurch */
	public $kBenutzerZugewiesenDurch;
}
