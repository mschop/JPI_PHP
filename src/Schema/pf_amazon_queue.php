<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kAmazonQueue' => 'int',
		'kUser' => 'int',
		'nKey' => 'int',
		'cFeed' => 'varchar',
		'cValue' => 'varchar',
		'nStatus' => 'tinyint',
		'dErstellt' => 'datetime',
		'dGesendet' => 'datetime',
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
