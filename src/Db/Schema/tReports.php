<?php

namespace App\Db\Schema;

class tReports
{
	const TABLE_NAME = 'tReports';
	const kReports = 'kReports';
	const cName = 'cName';
	const cData = 'cData';
	const cTyp = 'cTyp';
	const cDataSet = 'cDataSet';
	const COLUMN_NAMES = ['kReports', 'cName', 'cData', 'cTyp', 'cDataSet'];
	const COLUMN_DEFINITIONS = [
		'kReports' => [
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
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
		'cData' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
		'cDataSet' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kReports */
	public $kReports;

	/** @var string cName */
	public $cName;

	/** @var string cData */
	public $cData;

	/** @var string cTyp */
	public $cTyp;

	/** @var string cDataSet */
	public $cDataSet;
}
