<?php

namespace App\Db\Schema;

class tQueue
{
	const TABLE_NAME = 'tQueue';
	const kShop = 'kShop';
	const kPlattform = 'kPlattform';
	const cName = 'cName';
	const kWert = 'kWert';
	const nAction = 'nAction';
	const kOption1 = 'kOption1';
	const kOption2 = 'kOption2';
	const nInBearbeitung = 'nInBearbeitung';
	const COLUMN_NAMES = ['kShop', 'kPlattform', 'cName', 'kWert', 'nAction', 'kOption1', 'kOption2', 'nInBearbeitung'];
	const COLUMN_DEFINITIONS = [
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'kWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAction' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kOption1' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kOption2' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nInBearbeitung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kShop */
	public $kShop;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cName */
	public $cName;

	/** @var int kWert */
	public $kWert;

	/** @var int nAction */
	public $nAction;

	/** @var int kOption1 */
	public $kOption1;

	/** @var int kOption2 */
	public $kOption2;

	/** @var int nInBearbeitung */
	public $nInBearbeitung;
}
