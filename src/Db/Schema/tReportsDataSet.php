<?php

namespace App\Db\Schema;

class tReportsDataSet
{
	const TABLE_NAME = 'tReportsDataSet';
	const kReports = 'kReports';
	const cDataSet = 'cDataSet';
	const cName = 'cName';
	const COLUMN_NAMES = ['kReports', 'cDataSet', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kReports' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDataSet' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
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
	];

	/** @var int kReports */
	public $kReports;

	/** @var string cDataSet */
	public $cDataSet;

	/** @var string cName */
	public $cName;
}
