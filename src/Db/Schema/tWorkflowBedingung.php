<?php

namespace App\Db\Schema;

class tWorkflowBedingung
{
	const TABLE_NAME = 'tWorkflowBedingung';
	const kWorkflowBedingung = 'kWorkflowBedingung';
	const kWorkflow = 'kWorkflow';
	const cEigenschaft = 'cEigenschaft';
	const nOperator = 'nOperator';
	const cVergleichswert = 'cVergleichswert';
	const kWorkflowEigenschaft = 'kWorkflowEigenschaft';
	const COLUMN_NAMES = [
		'kWorkflowBedingung',
		'kWorkflow',
		'cEigenschaft',
		'nOperator',
		'cVergleichswert',
		'kWorkflowEigenschaft',
	];
	const COLUMN_DEFINITIONS = [
		'kWorkflowBedingung' => [
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
		'cEigenschaft' => [
			'type' => 'xml',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
		'nOperator' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVergleichswert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'kWorkflowEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWorkflowBedingung */
	public $kWorkflowBedingung;

	/** @var int kWorkflow */
	public $kWorkflow;

	/** @var resource cEigenschaft */
	public $cEigenschaft;

	/** @var int nOperator */
	public $nOperator;

	/** @var string cVergleichswert */
	public $cVergleichswert;

	/** @var int kWorkflowEigenschaft */
	public $kWorkflowEigenschaft;
}
