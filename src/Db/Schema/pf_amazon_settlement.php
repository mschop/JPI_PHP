<?php

namespace App\Db\Schema;

class pf_amazon_settlement
{
	const TABLE_NAME = 'pf_amazon_settlement';
	const kMessageId = 'kMessageId';
	const kUser = 'kUser';
	const ReportID = 'ReportID';
	const SettlementID = 'SettlementID';
	const SettlementStartDate = 'SettlementStartDate';
	const SettlementEndDate = 'SettlementEndDate';
	const DepositDate = 'DepositDate';
	const TotalAmount = 'TotalAmount';
	const Currency = 'Currency';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = [
		'kMessageId',
		'kUser',
		'ReportID',
		'SettlementID',
		'SettlementStartDate',
		'SettlementEndDate',
		'DepositDate',
		'TotalAmount',
		'Currency',
		'dErstellt',
	];
	const COLUMN_DEFINITIONS = [
		'kMessageId' => [
			'type' => 'bigint',
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
		'ReportID' => [
			'type' => 'bigint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SettlementID' => [
			'type' => 'bigint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SettlementStartDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SettlementEndDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'DepositDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'TotalAmount' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Currency' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
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

	/** @var int ReportID */
	public $ReportID;

	/** @var int SettlementID */
	public $SettlementID;

	/** @var string SettlementStartDate */
	public $SettlementStartDate;

	/** @var string SettlementEndDate */
	public $SettlementEndDate;

	/** @var string DepositDate */
	public $DepositDate;

	/** @var string TotalAmount */
	public $TotalAmount;

	/** @var string Currency */
	public $Currency;

	/** @var string dErstellt */
	public $dErstellt;
}
