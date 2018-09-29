<?php

namespace App\Db\Schema;

class tFulfillmentWorker
{
	const TABLE_NAME = 'tFulfillmentWorker';
	const kFulfillmentWorker = 'kFulfillmentWorker';
	const nTaskId = 'nTaskId';
	const dUpdated = 'dUpdated';
	const cTaskId = 'cTaskId';
	const COLUMN_NAMES = ['kFulfillmentWorker', 'nTaskId', 'dUpdated', 'cTaskId'];
	const COLUMN_DEFINITIONS = [
		'kFulfillmentWorker' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTaskId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dUpdated' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTaskId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kFulfillmentWorker */
	public $kFulfillmentWorker;

	/** @var int nTaskId */
	public $nTaskId;

	/** @var string dUpdated */
	public $dUpdated;

	/** @var string cTaskId */
	public $cTaskId;
}
