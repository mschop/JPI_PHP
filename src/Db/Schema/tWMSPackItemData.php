<?php

namespace App\Db\Schema;

class tWMSPackItemData
{
	const TABLE_NAME = 'tWMSPackItemData';
	const kWMSPackItemData = 'kWMSPackItemData';
	const kWMSPackItem = 'kWMSPackItem';
	const cChargenNr = 'cChargenNr';
	const dMHD = 'dMHD';
	const cSerNo = 'cSerNo';
	const fMenge = 'fMenge';
	const COLUMN_NAMES = ['kWMSPackItemData', 'kWMSPackItem', 'cChargenNr', 'dMHD', 'cSerNo', 'fMenge'];
	const COLUMN_DEFINITIONS = [
		'kWMSPackItemData' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWMSPackItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cChargenNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dMHD' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSerNo' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fMenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWMSPackItemData */
	public $kWMSPackItemData;

	/** @var int kWMSPackItem */
	public $kWMSPackItem;

	/** @var string cChargenNr */
	public $cChargenNr;

	/** @var string dMHD */
	public $dMHD;

	/** @var string cSerNo */
	public $cSerNo;

	/** @var string fMenge */
	public $fMenge;
}
