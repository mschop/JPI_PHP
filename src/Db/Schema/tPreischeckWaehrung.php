<?php

namespace App\Db\Schema;

class tPreischeckWaehrung
{
	const TABLE_NAME = 'tPreischeckWaehrung';
	const kPreischeckWaehrung = 'kPreischeckWaehrung';
	const cISO3 = 'cISO3';
	const fFaktor = 'fFaktor';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kPreischeckWaehrung', 'cISO3', 'fFaktor', 'dErstellt'];
	const COLUMN_DEFINITIONS = [
		'kPreischeckWaehrung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cISO3' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 3,
			'characterSetName' => 'iso_1',
		],
		'fFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPreischeckWaehrung */
	public $kPreischeckWaehrung;

	/** @var string cISO3 */
	public $cISO3;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var string dErstellt */
	public $dErstellt;
}
