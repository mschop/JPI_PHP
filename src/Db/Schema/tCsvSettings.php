<?php

namespace App\Db\Schema;

class tCsvSettings
{
	const TABLE_NAME = 'tCsvSettings';
	const cKey = 'cKey';
	const cDelmiter = 'cDelmiter';
	const cQuote = 'cQuote';
	const cEscape = 'cEscape';
	const cComment = 'cComment';
	const COLUMN_NAMES = ['cKey', 'cDelmiter', 'cQuote', 'cEscape', 'cComment'];
	const COLUMN_DEFINITIONS = [
		'cKey' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'UNICODE',
		],
		'cDelmiter' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'UNICODE',
		],
		'cQuote' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'UNICODE',
		],
		'cEscape' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'UNICODE',
		],
		'cComment' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'UNICODE',
		],
	];

	/** @var resource cKey */
	public $cKey;

	/** @var resource cDelmiter */
	public $cDelmiter;

	/** @var resource cQuote */
	public $cQuote;

	/** @var resource cEscape */
	public $cEscape;

	/** @var resource cComment */
	public $cComment;
}
