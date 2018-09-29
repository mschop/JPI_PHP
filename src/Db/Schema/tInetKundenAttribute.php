<?php

namespace App\Db\Schema;

class tInetKundenAttribute
{
	const TABLE_NAME = 'tInetKundenAttribute';
	const kInetKunde = 'kInetKunde';
	const kShop = 'kShop';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kInetKunde', 'kShop', 'cName', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kInetKunde' => [
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
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kInetKunde */
	public $kInetKunde;

	/** @var int kShop */
	public $kShop;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
