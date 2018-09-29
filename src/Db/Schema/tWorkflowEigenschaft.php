<?php

namespace App\Db\Schema;

class tWorkflowEigenschaft
{
	const TABLE_NAME = 'tWorkflowEigenschaft';
	const kWorkflowEigenschaft = 'kWorkflowEigenschaft';
	const cDotLiquid = 'cDotLiquid';
	const cName = 'cName';
	const nObjekt = 'nObjekt';
	const nDatenTyp = 'nDatenTyp';
	const COLUMN_NAMES = ['kWorkflowEigenschaft', 'cDotLiquid', 'cName', 'nObjekt', 'nDatenTyp'];
	const COLUMN_DEFINITIONS = [
		'kWorkflowEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDotLiquid' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nObjekt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDatenTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWorkflowEigenschaft */
	public $kWorkflowEigenschaft;

	/** @var string cDotLiquid */
	public $cDotLiquid;

	/** @var string cName */
	public $cName;

	/** @var int nObjekt */
	public $nObjekt;

	/** @var int nDatenTyp */
	public $nDatenTyp;
}
