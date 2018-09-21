<?php

namespace App\Schema;

class tFulfillmentLog
{
	const TABLE_NAME = 'tFulfillmentLog';
	const kFulfillmentLog = 'kFulfillmentLog';
	const kBenutzer = 'kBenutzer';
	const dTimestamp = 'dTimestamp';
	const cSessionId = 'cSessionId';
	const nLogLevel = 'nLogLevel';
	const nTaskType = 'nTaskType';
	const nNachrichtVon = 'nNachrichtVon';
	const kLieferant = 'kLieferant';
	const kLieferschein = 'kLieferschein';
	const kArtikelHistory = 'kArtikelHistory';
	const kWarenlager = 'kWarenlager';
	const kBestellung = 'kBestellung';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kFulfillmentAuftrag = 'kFulfillmentAuftrag';
	const kArtikel = 'kArtikel';
	const cTaskId = 'cTaskId';
	const cNotiz = 'cNotiz';
	const cRequest = 'cRequest';
	const cResponse = 'cResponse';
	const COLUMN_NAMES = [
		'kFulfillmentLog',
		'kBenutzer',
		'dTimestamp',
		'cSessionId',
		'nLogLevel',
		'nTaskType',
		'nNachrichtVon',
		'kLieferant',
		'kLieferschein',
		'kArtikelHistory',
		'kWarenlager',
		'kBestellung',
		'kLieferantenBestellung',
		'kFulfillmentAuftrag',
		'kArtikel',
		'cTaskId',
		'cNotiz',
		'cRequest',
		'cResponse',
	];
	const COLUMN_TYPES = [
		'kFulfillmentLog' => 'int',
		'kBenutzer' => 'int',
		'dTimestamp' => 'datetime',
		'cSessionId' => 'varchar',
		'nLogLevel' => 'tinyint',
		'nTaskType' => 'tinyint',
		'nNachrichtVon' => 'tinyint',
		'kLieferant' => 'int',
		'kLieferschein' => 'int',
		'kArtikelHistory' => 'int',
		'kWarenlager' => 'int',
		'kBestellung' => 'int',
		'kLieferantenBestellung' => 'int',
		'kFulfillmentAuftrag' => 'int',
		'kArtikel' => 'int',
		'cTaskId' => 'varchar',
		'cNotiz' => 'text',
		'cRequest' => 'text',
		'cResponse' => 'text',
	];

	/** @var int kFulfillmentLog */
	public $kFulfillmentLog;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dTimestamp */
	public $dTimestamp;

	/** @var string cSessionId */
	public $cSessionId;

	/** @var int nLogLevel */
	public $nLogLevel;

	/** @var int nTaskType */
	public $nTaskType;

	/** @var int nNachrichtVon */
	public $nNachrichtVon;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int kArtikelHistory */
	public $kArtikelHistory;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kFulfillmentAuftrag */
	public $kFulfillmentAuftrag;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cTaskId */
	public $cTaskId;

	/** @var resource cNotiz */
	public $cNotiz;

	/** @var resource cRequest */
	public $cRequest;

	/** @var resource cResponse */
	public $cResponse;
}
