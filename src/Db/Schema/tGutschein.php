<?php

namespace App\Db\Schema;

class tGutschein
{
	const TABLE_NAME = 'tGutschein';
	const kGutschein = 'kGutschein';
	const kKunde = 'kKunde';
	const kShop = 'kShop';
	const fWert = 'fWert';
	const cGrund = 'cGrund';
	const dErstellt = 'dErstellt';
	const cInet = 'cInet';
	const kInetKunde = 'kInetKunde';
	const COLUMN_NAMES = ['kGutschein', 'kKunde', 'kShop', 'fWert', 'cGrund', 'dErstellt', 'cInet', 'kInetKunde'];
	const COLUMN_DEFINITIONS = [
		'kGutschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fWert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cGrund' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1024,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
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
		'kInetKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kGutschein */
	public $kGutschein;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kShop */
	public $kShop;

	/** @var string fWert */
	public $fWert;

	/** @var string cGrund */
	public $cGrund;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cInet */
	public $cInet;

	/** @var int kInetKunde */
	public $kInetKunde;
}
