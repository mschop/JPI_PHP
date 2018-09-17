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
