<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kWMSPackItemData' => 'int',
		'kWMSPackItem' => 'int',
		'cChargenNr' => 'varchar',
		'dMHD' => 'datetime',
		'cSerNo' => 'varchar',
		'fMenge' => 'decimal',
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
