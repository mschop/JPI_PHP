<?php

namespace App\Schema;

class tRMStatusWorkflow
{
	const TABLE_NAME = 'tRMStatusWorkflow';
	const kRMStatusWorkflow = 'kRMStatusWorkflow';
	const kRMStatus = 'kRMStatus';
	const kWorkflow = 'kWorkflow';
	const nTyp = 'nTyp';
	const nEvent = 'nEvent';
	const COLUMN_NAMES = ['kRMStatusWorkflow', 'kRMStatus', 'kWorkflow', 'nTyp', 'nEvent'];
	const COLUMN_TYPES = [
		'kRMStatusWorkflow' => 'int',
		'kRMStatus' => 'int',
		'kWorkflow' => 'int',
		'nTyp' => 'int',
		'nEvent' => 'int',
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
