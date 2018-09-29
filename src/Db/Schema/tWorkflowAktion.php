<?php

namespace App\Db\Schema;

class tWorkflowAktion
{
	const TABLE_NAME = 'tWorkflowAktion';
	const kWorkflowAktion = 'kWorkflowAktion';
	const kWorkflow = 'kWorkflow';
	const xXmlObjekt = 'xXmlObjekt';
	const nPos = 'nPos';
	const cName = 'cName';
	const COLUMN_NAMES = ['kWorkflowAktion', 'kWorkflow', 'xXmlObjekt', 'nPos', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kWorkflowAktion' => [
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
		'xXmlObjekt' => [
			'type' => 'xml',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
		'nPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kWorkflowAktion */
	public $kWorkflowAktion;

	/** @var int kWorkflow */
	public $kWorkflow;

	/** @var resource xXmlObjekt */
	public $xXmlObjekt;

	/** @var int nPos */
	public $nPos;

	/** @var string cName */
	public $cName;
}
