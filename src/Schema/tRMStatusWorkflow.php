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
