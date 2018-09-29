<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kEbayDataUserOutputQueue' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMessageType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nDel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
