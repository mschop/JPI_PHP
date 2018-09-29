<?php

namespace App\Db\Schema;

class tWorkflowQueue
{
	const TABLE_NAME = 'tWorkflowQueue';
	const kWorkflowQueue = 'kWorkflowQueue';
	const nEvent = 'nEvent';
	const kWorkflow = 'kWorkflow';
	const kObjektPk = 'kObjektPk';
	const kBenutzer = 'kBenutzer';
	const dStartDate = 'dStartDate';
	const nStatus = 'nStatus';
	const COLUMN_NAMES = ['kWorkflowQueue', 'nEvent', 'kWorkflow', 'kObjektPk', 'kBenutzer', 'dStartDate', 'nStatus'];
	const COLUMN_DEFINITIONS = [
		'kWorkflowQueue' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEvent' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWorkflow' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kObjektPk' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dStartDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWorkflowQueue */
	public $kWorkflowQueue;

	/** @var int nEvent */
	public $nEvent;

	/** @var int kWorkflow */
	public $kWorkflow;

	/** @var int kObjektPk */
	public $kObjektPk;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dStartDate */
	public $dStartDate;

	/** @var int nStatus */
	public $nStatus;
}
