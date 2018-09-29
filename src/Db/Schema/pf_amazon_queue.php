<?php

namespace App\Db\Schema;

class pf_amazon_queue
{
	const TABLE_NAME = 'pf_amazon_queue';
	const kAmazonQueue = 'kAmazonQueue';
	const kUser = 'kUser';
	const nKey = 'nKey';
	const cFeed = 'cFeed';
	const cValue = 'cValue';
	const nStatus = 'nStatus';
	const dErstellt = 'dErstellt';
	const dGesendet = 'dGesendet';
	const COLUMN_NAMES = ['kAmazonQueue', 'kUser', 'nKey', 'cFeed', 'cValue', 'nStatus', 'dErstellt', 'dGesendet'];
	const COLUMN_DEFINITIONS = [
		'kAmazonQueue' => [
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
		'nKey' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFeed' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dGesendet' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAmazonQueue */
	public $kAmazonQueue;

	/** @var int kUser */
	public $kUser;

	/** @var int nKey */
	public $nKey;

	/** @var string cFeed */
	public $cFeed;

	/** @var string cValue */
	public $cValue;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dGesendet */
	public $dGesendet;
}
