<?php

namespace App\Schema;

class pf_amazon_bestellung_storno
{
	const TABLE_NAME = 'pf_amazon_bestellung_storno';
	const kAmazonBestellungStorno = 'kAmazonBestellungStorno';
	const cOrderId = 'cOrderId';
	const nCancelReason = 'nCancelReason';
	const dErstellt = 'dErstellt';
	const dBearbeitet = 'dBearbeitet';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = ['kAmazonBestellungStorno', 'cOrderId', 'nCancelReason', 'dErstellt', 'dBearbeitet', 'kBenutzer'];
	const COLUMN_TYPES = [
		'kAmazonBestellungStorno' => 'int',
		'cOrderId' => 'varchar',
		'nCancelReason' => 'tinyint',
		'dErstellt' => 'datetime',
		'dBearbeitet' => 'datetime',
		'kBenutzer' => 'int',
	];

	/** @var int kAmazonBestellungStorno */
	public $kAmazonBestellungStorno;

	/** @var string cOrderId */
	public $cOrderId;

	/** @var int nCancelReason */
	public $nCancelReason;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dBearbeitet */
	public $dBearbeitet;

	/** @var int kBenutzer */
	public $kBenutzer;
}
