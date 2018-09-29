<?php

namespace App\Db\Schema;

class pf_amazon_lagerbewegung
{
	const TABLE_NAME = 'pf_amazon_lagerbewegung';
	const kAmazonLagerbewegung = 'kAmazonLagerbewegung';
	const kUser = 'kUser';
	const kArtikel = 'kArtikel';
	const nMenge = 'nMenge';
	const cFulfillmentCenter = 'cFulfillmentCenter';
	const dSnapshot = 'dSnapshot';
	const nStatus = 'nStatus';
	const cTransactionType = 'cTransactionType';
	const kMessageId = 'kMessageId';
	const COLUMN_NAMES = [
		'kAmazonLagerbewegung',
		'kUser',
		'kArtikel',
		'nMenge',
		'cFulfillmentCenter',
		'dSnapshot',
		'nStatus',
		'cTransactionType',
		'kMessageId',
	];
	const COLUMN_DEFINITIONS = [
		'kAmazonLagerbewegung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMenge' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFulfillmentCenter' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'dSnapshot' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTransactionType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'kMessageId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAmazonLagerbewegung */
	public $kAmazonLagerbewegung;

	/** @var int kUser */
	public $kUser;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nMenge */
	public $nMenge;

	/** @var string cFulfillmentCenter */
	public $cFulfillmentCenter;

	/** @var string dSnapshot */
	public $dSnapshot;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cTransactionType */
	public $cTransactionType;

	/** @var int kMessageId */
	public $kMessageId;
}
