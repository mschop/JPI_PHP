<?php

namespace App\Schema;

class ebay_zahlung_out
{
	const TABLE_NAME = 'ebay_zahlung_out';
	const kEbayCheckout = 'kEbayCheckout';
	const dDatum = 'dDatum';
	const fBetrag = 'fBetrag';

	/** @var int kEbayCheckout */
	public $kEbayCheckout;

	/** @var string dDatum */
	public $dDatum;

	/** @var string fBetrag */
	public $fBetrag;
}
