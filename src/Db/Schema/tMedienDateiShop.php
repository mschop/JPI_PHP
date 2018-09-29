<?php

namespace App\Db\Schema;

class tMedienDateiShop
{
	const TABLE_NAME = 'tMedienDateiShop';
	const kMedienDatei = 'kMedienDatei';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';
	const COLUMN_NAMES = ['kMedienDatei', 'kShop', 'cInet', 'cDelInet'];
	const COLUMN_DEFINITIONS = [
		'kMedienDatei' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cDelInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kMedienDatei */
	public $kMedienDatei;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;
}
