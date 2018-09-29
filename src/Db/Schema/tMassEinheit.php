<?php

namespace App\Db\Schema;

class tMassEinheit
{
	const TABLE_NAME = 'tMassEinheit';
	const kMassEinheit = 'kMassEinheit';
	const cCode = 'cCode';
	const cDisplayCode = 'cDisplayCode';
	const kBezugsMassEinheit = 'kBezugsMassEinheit';
	const fBezugsMassEinheitFaktor = 'fBezugsMassEinheitFaktor';
	const COLUMN_NAMES = ['kMassEinheit', 'cCode', 'cDisplayCode', 'kBezugsMassEinheit', 'fBezugsMassEinheitFaktor'];
	const COLUMN_DEFINITIONS = [
		'kMassEinheit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cDisplayCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kBezugsMassEinheit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBezugsMassEinheitFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMassEinheit */
	public $kMassEinheit;

	/** @var string cCode */
	public $cCode;

	/** @var string cDisplayCode */
	public $cDisplayCode;

	/** @var int kBezugsMassEinheit */
	public $kBezugsMassEinheit;

	/** @var string fBezugsMassEinheitFaktor */
	public $fBezugsMassEinheitFaktor;
}
