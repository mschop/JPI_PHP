<?php

namespace App\Db\Schema;

class pf_amazon_bestellung_versand
{
	const TABLE_NAME = 'pf_amazon_bestellung_versand';
	const kAmazonBestellungVersand = 'kAmazonBestellungVersand';
	const kAmazonBestellungPos = 'kAmazonBestellungPos';
	const kLieferschein = 'kLieferschein';
	const nQuantity = 'nQuantity';
	const kBenutzer = 'kBenutzer';
	const cCarrierCode = 'cCarrierCode';
	const cCarrierName = 'cCarrierName';
	const cTrackingNumber = 'cTrackingNumber';
	const cShipMethod = 'cShipMethod';
	const dShipDate = 'dShipDate';
	const dBearbeitet = 'dBearbeitet';
	const COLUMN_NAMES = [
		'kAmazonBestellungVersand',
		'kAmazonBestellungPos',
		'kLieferschein',
		'nQuantity',
		'kBenutzer',
		'cCarrierCode',
		'cCarrierName',
		'cTrackingNumber',
		'cShipMethod',
		'dShipDate',
		'dBearbeitet',
	];
	const COLUMN_DEFINITIONS = [
		'kAmazonBestellungVersand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAmazonBestellungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nQuantity' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cCarrierCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCarrierName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTrackingNumber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cShipMethod' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dShipDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
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
	];

	/** @var int kAmazonBestellungVersand */
	public $kAmazonBestellungVersand;

	/** @var int kAmazonBestellungPos */
	public $kAmazonBestellungPos;

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int nQuantity */
	public $nQuantity;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cCarrierCode */
	public $cCarrierCode;

	/** @var string cCarrierName */
	public $cCarrierName;

	/** @var string cTrackingNumber */
	public $cTrackingNumber;

	/** @var string cShipMethod */
	public $cShipMethod;

	/** @var string dShipDate */
	public $dShipDate;

	/** @var string dBearbeitet */
	public $dBearbeitet;
}
