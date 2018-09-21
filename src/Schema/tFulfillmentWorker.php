<?php

namespace App\Schema;

class tFulfillmentWorker
{
	const TABLE_NAME = 'tFulfillmentWorker';
	const kFulfillmentWorker = 'kFulfillmentWorker';
	const nTaskId = 'nTaskId';
	const dUpdated = 'dUpdated';
	const cTaskId = 'cTaskId';
	const COLUMN_NAMES = ['kFulfillmentWorker', 'nTaskId', 'dUpdated', 'cTaskId'];
	const COLUMN_TYPES = ['kFulfillmentWorker' => 'int', 'nTaskId' => 'int', 'dUpdated' => 'datetime', 'cTaskId' => 'varchar'];

	/** @var int kFulfillmentWorker */
	public $kFulfillmentWorker;

	/** @var int nTaskId */
	public $nTaskId;

	/** @var string dUpdated */
	public $dUpdated;

	/** @var string cTaskId */
	public $cTaskId;
}
