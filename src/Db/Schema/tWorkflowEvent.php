<?php

namespace App\Db\Schema;

class tWorkflowEvent
{
	const TABLE_NAME = 'tWorkflowEvent';
	const kWorkflowEvent = 'kWorkflowEvent';
	const nEvent = 'nEvent';
	const nObjekt = 'nObjekt';
	const cDisplayName = 'cDisplayName';
	const cSortierung = 'cSortierung';
	const COLUMN_NAMES = ['kWorkflowEvent', 'nEvent', 'nObjekt', 'cDisplayName', 'cSortierung'];
	const COLUMN_DEFINITIONS = [
		'kWorkflowEvent' => [
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
		'nObjekt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDisplayName' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'UNICODE',
		],
		'cSortierung' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'UNICODE',
		],
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
