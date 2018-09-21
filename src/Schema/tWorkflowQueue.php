<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kWorkflowQueue' => 'int',
		'nEvent' => 'int',
		'kWorkflow' => 'int',
		'kObjektPk' => 'int',
		'kBenutzer' => 'int',
		'dStartDate' => 'datetime',
		'nStatus' => 'int',
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
