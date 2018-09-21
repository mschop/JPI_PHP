<?php

namespace App\Schema;

class ebay_usermessagequeue
{
	const TABLE_NAME = 'ebay_usermessagequeue';
	const kEbayDataUserOutputQueue = 'kEbayDataUserOutputQueue';
	const cMessageType = 'cMessageType';
	const cMessage = 'cMessage';
	const dErstellt = 'dErstellt';
	const nDel = 'nDel';
	const kEbayUser = 'kEbayUser';
	const COLUMN_NAMES = ['kEbayDataUserOutputQueue', 'cMessageType', 'cMessage', 'dErstellt', 'nDel', 'kEbayUser'];
	const COLUMN_TYPES = [
		'kEbayDataUserOutputQueue' => 'int',
		'cMessageType' => 'varchar',
		'cMessage' => 'varchar',
		'dErstellt' => 'varchar',
		'nDel' => 'int',
		'kEbayUser' => 'int',
	];

	/** @var int kEbayDataUserOutputQueue */
	public $kEbayDataUserOutputQueue;

	/** @var string cMessageType */
	public $cMessageType;

	/** @var string cMessage */
	public $cMessage;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nDel */
	public $nDel;

	/** @var int kEbayUser */
	public $kEbayUser;
}
