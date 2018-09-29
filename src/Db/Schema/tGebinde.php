<?php

namespace App\Db\Schema;

class tGebinde
{
	const TABLE_NAME = 'tGebinde';
	const kGebinde = 'kGebinde';
	const kArtikel = 'kArtikel';
	const cName = 'cName';
	const fAnzahl = 'fAnzahl';
	const cEAN = 'cEAN';
	const cUPC = 'cUPC';
	const COLUMN_NAMES = ['kGebinde', 'kArtikel', 'cName', 'fAnzahl', 'cEAN', 'cUPC'];
	const COLUMN_DEFINITIONS = [
		'kGebinde' => [
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
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cEAN' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cUPC' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kGebinde */
	public $kGebinde;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cName */
	public $cName;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string cEAN */
	public $cEAN;

	/** @var string cUPC */
	public $cUPC;
}
