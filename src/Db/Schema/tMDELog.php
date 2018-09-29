<?php

namespace App\Db\Schema;

class tMDELog
{
	const TABLE_NAME = 'tMDELog';
	const kMDELog = 'kMDELog';
	const nLogID = 'nLogID';
	const dDatum = 'dDatum';
	const kBenutzer = 'kBenutzer';
	const cLog = 'cLog';
	const cView = 'cView';
	const nTime = 'nTime';
	const nLogLevel = 'nLogLevel';
	const cSessionId = 'cSessionId';
	const cServer = 'cServer';
	const COLUMN_NAMES = [
		'kMDELog',
		'nLogID',
		'dDatum',
		'kBenutzer',
		'cLog',
		'cView',
		'nTime',
		'nLogLevel',
		'cSessionId',
		'cServer',
	];
	const COLUMN_DEFINITIONS = [
		'kMDELog' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLogID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLog' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
		'cView' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nTime' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLogLevel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSessionId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 250,
			'characterSetName' => 'iso_1',
		],
		'cServer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 250,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kMDELog */
	public $kMDELog;

	/** @var int nLogID */
	public $nLogID;

	/** @var string dDatum */
	public $dDatum;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cLog */
	public $cLog;

	/** @var string cView */
	public $cView;

	/** @var int nTime */
	public $nTime;

	/** @var int nLogLevel */
	public $nLogLevel;

	/** @var string cSessionId */
	public $cSessionId;

	/** @var string cServer */
	public $cServer;
}
