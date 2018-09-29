<?php

namespace App\Db\Schema;

class tAmazonShippingDruckereinstellungen
{
	const TABLE_NAME = 'tAmazonShippingDruckereinstellungen';
	const kAmazonShippingDruckereinstellungen = 'kAmazonShippingDruckereinstellungen';
	const kVersandart = 'kVersandart';
	const cRechnername = 'cRechnername';
	const kBenutzer = 'kBenutzer';
	const cDruckername = 'cDruckername';
	const nPageScaling = 'nPageScaling';
	const COLUMN_NAMES = [
		'kAmazonShippingDruckereinstellungen',
		'kVersandart',
		'cRechnername',
		'kBenutzer',
		'cDruckername',
		'nPageScaling',
	];
	const COLUMN_DEFINITIONS = [
		'kAmazonShippingDruckereinstellungen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDruckername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPageScaling' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAmazonShippingDruckereinstellungen */
	public $kAmazonShippingDruckereinstellungen;

	/** @var int kVersandart */
	public $kVersandart;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cDruckername */
	public $cDruckername;

	/** @var int nPageScaling */
	public $nPageScaling;
}
