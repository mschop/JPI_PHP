<?php

namespace App\Db\Schema;

class ebay_item2kombi
{
	const TABLE_NAME = 'ebay_item2kombi';
	const kItem = 'kItem';
	const kEigenschaftKombi = 'kEigenschaftKombi';
	const fPreis = 'fPreis';
	const fAnzahl = 'fAnzahl';
	const fMaxAnzahl = 'fMaxAnzahl';
	const cEAN = 'cEAN';
	const fMinAnzahl = 'fMinAnzahl';
	const fStreichPreis = 'fStreichPreis';
	const cStreichPreisTyp = 'cStreichPreisTyp';
	const COLUMN_NAMES = [
		'kItem',
		'kEigenschaftKombi',
		'fPreis',
		'fAnzahl',
		'fMaxAnzahl',
		'cEAN',
		'fMinAnzahl',
		'fStreichPreis',
		'cStreichPreisTyp',
	];
	const COLUMN_DEFINITIONS = [
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaftKombi' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMaxAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
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
		'fMinAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fStreichPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStreichPreisTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kItem */
	public $kItem;

	/** @var int kEigenschaftKombi */
	public $kEigenschaftKombi;

	/** @var string fPreis */
	public $fPreis;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fMaxAnzahl */
	public $fMaxAnzahl;

	/** @var string cEAN */
	public $cEAN;

	/** @var string fMinAnzahl */
	public $fMinAnzahl;

	/** @var string fStreichPreis */
	public $fStreichPreis;

	/** @var string cStreichPreisTyp */
	public $cStreichPreisTyp;
}
