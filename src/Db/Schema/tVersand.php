<?php

namespace App\Db\Schema;

class tVersand
{
	const TABLE_NAME = 'tVersand';
	const kVersand = 'kVersand';
	const kLieferschein = 'kLieferschein';
	const kBenutzer = 'kBenutzer';
	const kLogistik = 'kLogistik';
	const cIdentCode = 'cIdentCode';
	const dErstellt = 'dErstellt';
	const cHinweis = 'cHinweis';
	const fGewicht = 'fGewicht';
	const kVersandArt = 'kVersandArt';
	const cLogistiker = 'cLogistiker';
	const cFulfillmentCenter = 'cFulfillmentCenter';
	const dAnkunftszeit = 'dAnkunftszeit';
	const nVerpackZeitSek = 'nVerpackZeitSek';
	const dVersendet = 'dVersendet';
	const nStatus = 'nStatus';
	const cShipmentId = 'cShipmentId';
	const cReference = 'cReference';
	const COLUMN_NAMES = [
		'kVersand',
		'kLieferschein',
		'kBenutzer',
		'kLogistik',
		'cIdentCode',
		'dErstellt',
		'cHinweis',
		'fGewicht',
		'kVersandArt',
		'cLogistiker',
		'cFulfillmentCenter',
		'dAnkunftszeit',
		'nVerpackZeitSek',
		'dVersendet',
		'nStatus',
		'cShipmentId',
		'cReference',
	];
	const COLUMN_DEFINITIONS = [
		'kVersand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLogistik' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cIdentCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fGewicht' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandArt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLogistiker' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cFulfillmentCenter' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'dAnkunftszeit' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVerpackZeitSek' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dVersendet' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cShipmentId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cReference' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kVersand */
	public $kVersand;

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kLogistik */
	public $kLogistik;

	/** @var string cIdentCode */
	public $cIdentCode;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string fGewicht */
	public $fGewicht;

	/** @var int kVersandArt */
	public $kVersandArt;

	/** @var string cLogistiker */
	public $cLogistiker;

	/** @var string cFulfillmentCenter */
	public $cFulfillmentCenter;

	/** @var string dAnkunftszeit */
	public $dAnkunftszeit;

	/** @var int nVerpackZeitSek */
	public $nVerpackZeitSek;

	/** @var string dVersendet */
	public $dVersendet;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cShipmentId */
	public $cShipmentId;

	/** @var string cReference */
	public $cReference;
}
