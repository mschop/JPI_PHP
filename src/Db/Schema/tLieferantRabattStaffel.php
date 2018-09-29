<?php

namespace App\Db\Schema;

class tLieferantRabattStaffel
{
	const TABLE_NAME = 'tLieferantRabattStaffel';
	const kLieferantStaffelPreis = 'kLieferantStaffelPreis';
	const kLieferant = 'kLieferant';
	const fAb = 'fAb';
	const fRabatt = 'fRabatt';
	const COLUMN_NAMES = ['kLieferantStaffelPreis', 'kLieferant', 'fAb', 'fRabatt'];
	const COLUMN_DEFINITIONS = [
		'kLieferantStaffelPreis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAb' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fRabatt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLieferantStaffelPreis */
	public $kLieferantStaffelPreis;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string fAb */
	public $fAb;

	/** @var string fRabatt */
	public $fRabatt;
}
