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
	const COLUMN_NAMES = ['kWorkflowEvent', 'nEvent', 'nObjekt', 'cDisplayName', 'cSortierung'];
	const COLUMN_TYPES = [
		'kWorkflowEvent' => 'int',
		'nEvent' => 'int',
		'nObjekt' => 'int',
		'cDisplayName' => 'nvarchar',
		'cSortierung' => 'nvarchar',
	];

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
