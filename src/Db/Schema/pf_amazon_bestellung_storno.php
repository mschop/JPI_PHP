<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kAmazonBestellungStorno' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'nCancelReason' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dBearbeitet' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
