<?php

namespace App\Db\Schema;

class tKundenHistorie
{
	const TABLE_NAME = 'tKundenHistorie';
	const kKunde = 'kKunde';
	const cString = 'cString';
	const dErstellt = 'dErstellt';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = ['kKunde', 'cString', 'dErstellt', 'kBenutzer'];
	const COLUMN_DEFINITIONS = [
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cString' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
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
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kKunde */
	public $kKunde;

	/** @var string cString */
	public $cString;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kBenutzer */
	public $kBenutzer;
}
