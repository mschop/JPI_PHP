<?php

namespace App\Db\Schema;

class tland
{
	const TABLE_NAME = 'tland';
	const cISO = 'cISO';
	const cName = 'cName';
	const cNameEng = 'cNameEng';
	const nEU = 'nEU';
	const cKontinent = 'cKontinent';
	const cNameFra = 'cNameFra';
	const cISO3 = 'cISO3';
	const nISONumeric = 'nISONumeric';
	const cWaehrung = 'cWaehrung';
	const cDefaultCulture = 'cDefaultCulture';
	const COLUMN_NAMES = [
		'cISO',
		'cName',
		'cNameEng',
		'nEU',
		'cKontinent',
		'cNameFra',
		'cISO3',
		'nISONumeric',
		'cWaehrung',
		'cDefaultCulture',
	];
	const COLUMN_DEFINITIONS = [
		'cISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
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
		'cNameEng' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nEU' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKontinent' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cNameFra' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cISO3' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'nISONumeric' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWaehrung' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 3,
			'characterSetName' => 'iso_1',
		],
		'cDefaultCulture' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cISO */
	public $cISO;

	/** @var string cName */
	public $cName;

	/** @var string cNameEng */
	public $cNameEng;

	/** @var int nEU */
	public $nEU;

	/** @var string cKontinent */
	public $cKontinent;

	/** @var string cNameFra */
	public $cNameFra;

	/** @var string cISO3 */
	public $cISO3;

	/** @var int nISONumeric */
	public $nISONumeric;

	/** @var string cWaehrung */
	public $cWaehrung;

	/** @var string cDefaultCulture */
	public $cDefaultCulture;
}
