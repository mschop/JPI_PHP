<?php

namespace App\Db\Schema;

class tbestelleigenschaft
{
	const TABLE_NAME = 'tbestelleigenschaft';
	const kBestellEigenschaft = 'kBestellEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kBestellPos = 'kBestellPos';
	const kArtikel = 'kArtikel';
	const fNettoPreis = 'fNettoPreis';
	const cWert = 'cWert';
	const cName = 'cName';
	const kEigenschaft = 'kEigenschaft';
	const COLUMN_NAMES = [
		'kBestellEigenschaft',
		'kEigenschaftWert',
		'kBestellPos',
		'kArtikel',
		'fNettoPreis',
		'cWert',
		'cName',
		'kEigenschaft',
	];
	const COLUMN_DEFINITIONS = [
		'kBestellEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaftWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fNettoPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBestellEigenschaft */
	public $kBestellEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fNettoPreis */
	public $fNettoPreis;

	/** @var string cWert */
	public $cWert;

	/** @var string cName */
	public $cName;

	/** @var int kEigenschaft */
	public $kEigenschaft;
}
