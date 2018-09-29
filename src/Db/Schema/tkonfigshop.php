<?php

namespace App\Db\Schema;

class tkonfigshop
{
	const TABLE_NAME = 'tkonfigshop';
	const kkonfiggruppe = 'kkonfiggruppe';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';
	const COLUMN_NAMES = ['kkonfiggruppe', 'kShop', 'cInet', 'cDelInet'];
	const COLUMN_DEFINITIONS = [
		'kkonfiggruppe' => [
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

	/** @var int kkonfiggruppe */
	public $kkonfiggruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;
}
