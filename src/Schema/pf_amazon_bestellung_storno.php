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
