<?php

namespace App\Db\Schema;

class tLagerbestandBackup
{
	const TABLE_NAME = 'tLagerbestandBackup';
	const kArtikel = 'kArtikel';
	const fLagerbestand = 'fLagerbestand';
	const dErstellt = 'dErstellt';
	const cVersion = 'cVersion';
	const COLUMN_NAMES = ['kArtikel', 'fLagerbestand', 'dErstellt', 'cVersion'];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLagerbestand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVersion' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fLagerbestand */
	public $fLagerbestand;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cVersion */
	public $cVersion;
}
