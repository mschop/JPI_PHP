<?php

namespace App\Db\Schema;

class tWMSBoxenPackVerpackteSerNos
{
	const TABLE_NAME = 'tWMSBoxenPackVerpackteSerNos';
	const kWMSBoxenPackVerpackteSerNos = 'kWMSBoxenPackVerpackteSerNos';
	const kBestellung = 'kBestellung';
	const kBestellPos = 'kBestellPos';
	const kArtikel = 'kArtikel';
	const cSerNo = 'cSerNo';
	const COLUMN_NAMES = ['kWMSBoxenPackVerpackteSerNos', 'kBestellung', 'kBestellPos', 'kArtikel', 'cSerNo'];
	const COLUMN_DEFINITIONS = [
		'kWMSBoxenPackVerpackteSerNos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSerNo' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kWMSBoxenPackVerpackteSerNos */
	public $kWMSBoxenPackVerpackteSerNos;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cSerNo */
	public $cSerNo;
}
