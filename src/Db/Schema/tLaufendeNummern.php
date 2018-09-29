<?php

namespace App\Db\Schema;

class tLaufendeNummern
{
	const TABLE_NAME = 'tLaufendeNummern';
	const kLaufendeNummer = 'kLaufendeNummer';
	const cName = 'cName';
	const nNummer = 'nNummer';
	const cPrefix = 'cPrefix';
	const cSuffix = 'cSuffix';
	const kFirma = 'kFirma';
	const cTable = 'cTable';
	const cColumn = 'cColumn';
	const COLUMN_NAMES = ['kLaufendeNummer', 'cName', 'nNummer', 'cPrefix', 'cSuffix', 'kFirma', 'cTable', 'cColumn'];
	const COLUMN_DEFINITIONS = [
		'kLaufendeNummer' => [
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
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nNummer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPrefix' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cSuffix' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTable' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cColumn' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kLaufendeNummer */
	public $kLaufendeNummer;

	/** @var string cName */
	public $cName;

	/** @var int nNummer */
	public $nNummer;

	/** @var string cPrefix */
	public $cPrefix;

	/** @var string cSuffix */
	public $cSuffix;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cTable */
	public $cTable;

	/** @var string cColumn */
	public $cColumn;
}
