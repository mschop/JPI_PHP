<?php

namespace App\Schema;

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
