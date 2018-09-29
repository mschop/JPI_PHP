<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kFulfillmentLog' => [
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
		'dTimestamp' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSessionId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nLogLevel' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTaskType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nNachrichtVon' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikelHistory' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFulfillmentAuftrag' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTaskId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cNotiz' => [
			'type' => 'text',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => 'iso_1',
		],
		'cRequest' => [
			'type' => 'text',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => 'iso_1',
		],
		'cResponse' => [
			'type' => 'text',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => 'iso_1',
		],
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
