<?php

namespace App\Db\Schema;

class tWorkflowLog
{
	const TABLE_NAME = 'tWorkflowLog';
	const kWorkflowLog = 'kWorkflowLog';
	const kObjektPk = 'kObjektPk';
	const kWorkflowAktion = 'kWorkflowAktion';
	const dDatum = 'dDatum';
	const cArbeitsplatz = 'cArbeitsplatz';
	const kBenutzer = 'kBenutzer';
	const nTyp = 'nTyp';
	const cLog = 'cLog';
	const kWorkflow = 'kWorkflow';
	const nUnique = 'nUnique';
	const cObjectId = 'cObjectId';
	const COLUMN_NAMES = [
		'kWorkflowLog',
		'kObjektPk',
		'kWorkflowAktion',
		'dDatum',
		'cArbeitsplatz',
		'kBenutzer',
		'nTyp',
		'cLog',
		'kWorkflow',
		'nUnique',
		'cObjectId',
	];
	const COLUMN_DEFINITIONS = [
		'kWorkflowLog' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kObjektPk' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWorkflowAktion' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArbeitsplatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLog' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'kWorkflow' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUnique' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cObjectId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kWorkflowLog */
	public $kWorkflowLog;

	/** @var int kObjektPk */
	public $kObjektPk;

	/** @var int kWorkflowAktion */
	public $kWorkflowAktion;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cArbeitsplatz */
	public $cArbeitsplatz;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cLog */
	public $cLog;

	/** @var int kWorkflow */
	public $kWorkflow;

	/** @var int nUnique */
	public $nUnique;

	/** @var string cObjectId */
	public $cObjectId;
}
