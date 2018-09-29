<?php

namespace App\Db\Schema;

class pf_amazon_bestellungstatus
{
	const TABLE_NAME = 'pf_amazon_bestellungstatus';
	const kMessageId = 'kMessageId';
	const kUser = 'kUser';
	const cOrderId = 'cOrderId';
	const cOrderStatus = 'cOrderStatus';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kMessageId', 'kUser', 'cOrderId', 'cOrderStatus', 'dErstellt'];
	const COLUMN_DEFINITIONS = [
		'kMessageId' => [
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
		'cOrderId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cOrderStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMessageId */
	public $kMessageId;

	/** @var int kUser */
	public $kUser;

	/** @var string cOrderId */
	public $cOrderId;

	/** @var string cOrderStatus */
	public $cOrderStatus;

	/** @var string dErstellt */
	public $dErstellt;
}
