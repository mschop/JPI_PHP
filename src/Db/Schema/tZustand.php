<?php

namespace App\Db\Schema;

class tZustand
{
	const TABLE_NAME = 'tZustand';
	const kZustand = 'kZustand';
	const cSuffix = 'cSuffix';
	const nAktiv = 'nAktiv';
	const cColor = 'cColor';
	const nTyp = 'nTyp';
	const nEinschraenkung = 'nEinschraenkung';
	const nCode = 'nCode';
	const nEbayCode = 'nEbayCode';
	const nAmazonCode = 'nAmazonCode';
	const nSort = 'nSort';
	const nLieferantenEntfernen = 'nLieferantenEntfernen';
	const COLUMN_NAMES = [
		'kZustand',
		'cSuffix',
		'nAktiv',
		'cColor',
		'nTyp',
		'nEinschraenkung',
		'nCode',
		'nEbayCode',
		'nAmazonCode',
		'nSort',
		'nLieferantenEntfernen',
	];
	const COLUMN_DEFINITIONS = [
		'kZustand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSuffix' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'nAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cColor' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8,
			'characterSetName' => 'iso_1',
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEinschraenkung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nCode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEbayCode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAmazonCode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLieferantenEntfernen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kZustand */
	public $kZustand;

	/** @var string cSuffix */
	public $cSuffix;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var string cColor */
	public $cColor;

	/** @var int nTyp */
	public $nTyp;

	/** @var int nEinschraenkung */
	public $nEinschraenkung;

	/** @var int nCode */
	public $nCode;

	/** @var int nEbayCode */
	public $nEbayCode;

	/** @var int nAmazonCode */
	public $nAmazonCode;

	/** @var int nSort */
	public $nSort;

	/** @var int nLieferantenEntfernen */
	public $nLieferantenEntfernen;
}
