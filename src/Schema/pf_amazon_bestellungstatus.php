<?php

namespace App\Schema;

class pf_amazon_bestellungstatus
{
	const TABLE_NAME = 'pf_amazon_bestellungstatus';
	const kMessageId = 'kMessageId';
	const kUser = 'kUser';
	const cOrderId = 'cOrderId';
	const cOrderStatus = 'cOrderStatus';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kMessageId', 'kUser', 'cOrderId', 'cOrderStatus', 'dErstellt'];
	const COLUMN_TYPES = [
		'kMessageId' => 'int',
		'kUser' => 'int',
		'cOrderId' => 'varchar',
		'cOrderStatus' => 'varchar',
		'dErstellt' => 'datetime',
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
