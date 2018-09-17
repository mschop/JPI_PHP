<?php

namespace App\Schema;

class tWorkflowEvent
{
	const TABLE_NAME = 'tWorkflowEvent';
	const kWorkflowEvent = 'kWorkflowEvent';
	const nEvent = 'nEvent';
	const nObjekt = 'nObjekt';
	const cDisplayName = 'cDisplayName';
	const cSortierung = 'cSortierung';

	/** @var int kWorkflowEvent */
	public $kWorkflowEvent;

	/** @var int nEvent */
	public $nEvent;

	/** @var int nObjekt */
	public $nObjekt;

	/** @var resource cDisplayName */
	public $cDisplayName;

	/** @var resource cSortierung */
	public $cSortierung;
}
