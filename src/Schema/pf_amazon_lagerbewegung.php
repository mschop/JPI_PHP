<?php

namespace App\Schema;

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
