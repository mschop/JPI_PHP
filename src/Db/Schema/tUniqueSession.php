<?php

namespace App\Db\Schema;

class tUniqueSession
{
	const TABLE_NAME = 'tUniqueSession';
	const kSession = 'kSession';
	const cContext = 'cContext';
	const dLastCallback = 'dLastCallback';
	const cInfo = 'cInfo';
	const COLUMN_NAMES = ['kSession', 'cContext', 'dLastCallback', 'cInfo'];
	const COLUMN_DEFINITIONS = [
		'kSession' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cContext' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'dLastCallback' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cInfo' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kSession */
	public $kSession;

	/** @var string cContext */
	public $cContext;

	/** @var string dLastCallback */
	public $dLastCallback;

	/** @var string cInfo */
	public $cInfo;
}
