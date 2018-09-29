<?php

namespace App\Db\Schema;

class ebay_zahlung_out
{
	const TABLE_NAME = 'ebay_zahlung_out';
	const kEbayCheckout = 'kEbayCheckout';
	const dDatum = 'dDatum';
	const fBetrag = 'fBetrag';
	const COLUMN_NAMES = ['kEbayCheckout', 'dDatum', 'fBetrag'];
	const COLUMN_DEFINITIONS = [
		'kEbayCheckout' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDatum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'fBetrag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayCheckout */
	public $kEbayCheckout;

	/** @var string dDatum */
	public $dDatum;

	/** @var string fBetrag */
	public $fBetrag;
}
