<?php

namespace App\Db\Schema;

class tSprachen
{
	const TABLE_NAME = 'tSprachen';
	const kSprache = 'kSprache';
	const cNameEng = 'cNameEng';
	const cNameDeu = 'cNameDeu';
	const cISO = 'cISO';
	const cKultur = 'cKultur';
	const cISO2 = 'cISO2';
	const COLUMN_NAMES = ['kSprache', 'cNameEng', 'cNameDeu', 'cISO', 'cKultur', 'cISO2'];
	const COLUMN_DEFINITIONS = [
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cNameEng' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cNameDeu' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cKultur' => [
			'type' => 'nchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'UNICODE',
		],
		'cISO2' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 2,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kSprache */
	public $kSprache;

	/** @var string cNameEng */
	public $cNameEng;

	/** @var string cNameDeu */
	public $cNameDeu;

	/** @var string cISO */
	public $cISO;

	/** @var resource cKultur */
	public $cKultur;

	/** @var string cISO2 */
	public $cISO2;
}
