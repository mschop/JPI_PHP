<?php

namespace App\Schema;

class ebay_zahlung_out
{
	const TABLE_NAME = 'ebay_zahlung_out';
	const kEbayCheckout = 'kEbayCheckout';
	const dDatum = 'dDatum';
	const fBetrag = 'fBetrag';
	const COLUMN_NAMES = ['kEbayCheckout', 'dDatum', 'fBetrag'];
	const COLUMN_TYPES = ['kEbayCheckout' => 'int', 'dDatum' => 'varchar', 'fBetrag' => 'decimal'];

	/** @var int kEbayCheckout */
	public $kEbayCheckout;

	/** @var string dDatum */
	public $dDatum;

	/** @var string fBetrag */
	public $fBetrag;
}
