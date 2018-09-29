<?php

namespace App\Db\Schema;

class tCryptoSlot
{
	const TABLE_NAME = 'tCryptoSlot';
	const kCryptoSlot = 'kCryptoSlot';
	const nSlotId = 'nSlotId';
	const kBenutzer = 'kBenutzer';
	const bCryptedSlotkey = 'bCryptedSlotkey';
	const kBenutzerZugewiesenDurch = 'kBenutzerZugewiesenDurch';
	const COLUMN_NAMES = ['kCryptoSlot', 'nSlotId', 'kBenutzer', 'bCryptedSlotkey', 'kBenutzerZugewiesenDurch'];
	const COLUMN_DEFINITIONS = [
		'kCryptoSlot' => [
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
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bCryptedSlotkey' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
		'kBenutzerZugewiesenDurch' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
