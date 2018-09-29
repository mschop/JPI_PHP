<?php

namespace App\Db\Schema;

class tRMStatusWorkflow
{
	const TABLE_NAME = 'tRMStatusWorkflow';
	const kRMStatusWorkflow = 'kRMStatusWorkflow';
	const kRMStatus = 'kRMStatus';
	const kWorkflow = 'kWorkflow';
	const nTyp = 'nTyp';
	const nEvent = 'nEvent';
	const COLUMN_NAMES = ['kRMStatusWorkflow', 'kRMStatus', 'kWorkflow', 'nTyp', 'nEvent'];
	const COLUMN_DEFINITIONS = [
		'kRMStatusWorkflow' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMStatus' => [
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
		'nTyp' => [
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
	];

	/** @var int kRMStatusWorkflow */
	public $kRMStatusWorkflow;

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var int kWorkflow */
	public $kWorkflow;

	/** @var int nTyp */
	public $nTyp;

	/** @var int nEvent */
	public $nEvent;
}
