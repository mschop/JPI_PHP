<?php

namespace App\Db\Schema;

class tWorkflow
{
	const TABLE_NAME = 'tWorkflow';
	const kWorkflow = 'kWorkflow';
	const cName = 'cName';
	const nEvent = 'nEvent';
	const nObjekt = 'nObjekt';
	const nVerknuepfung = 'nVerknuepfung';
	const nPos = 'nPos';
	const nTyp = 'nTyp';
	const nApplikation = 'nApplikation';
	const nSchedulerOptions = 'nSchedulerOptions';
	const dtSchedulerTime = 'dtSchedulerTime';
	const nSchedulerHour = 'nSchedulerHour';
	const nSchedulerMinute = 'nSchedulerMinute';
	const nSchedulerDayValue = 'nSchedulerDayValue';
	const nSchedulerMonthValue = 'nSchedulerMonthValue';
	const COLUMN_NAMES = [
		'kWorkflow',
		'cName',
		'nEvent',
		'nObjekt',
		'nVerknuepfung',
		'nPos',
		'nTyp',
		'nApplikation',
		'nSchedulerOptions',
		'dtSchedulerTime',
		'nSchedulerHour',
		'nSchedulerMinute',
		'nSchedulerDayValue',
		'nSchedulerMonthValue',
	];
	const COLUMN_DEFINITIONS = [
		'kWorkflow' => [
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
		'nVerknuepfung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
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
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nApplikation' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSchedulerOptions' => [
			'type' => 'bigint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dtSchedulerTime' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSchedulerHour' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSchedulerMinute' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSchedulerDayValue' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSchedulerMonthValue' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWorkflow */
	public $kWorkflow;

	/** @var string cName */
	public $cName;

	/** @var int nEvent */
	public $nEvent;

	/** @var int nObjekt */
	public $nObjekt;

	/** @var int nVerknuepfung */
	public $nVerknuepfung;

	/** @var int nPos */
	public $nPos;

	/** @var int nTyp */
	public $nTyp;

	/** @var int nApplikation */
	public $nApplikation;

	/** @var int nSchedulerOptions */
	public $nSchedulerOptions;

	/** @var string dtSchedulerTime */
	public $dtSchedulerTime;

	/** @var int nSchedulerHour */
	public $nSchedulerHour;

	/** @var int nSchedulerMinute */
	public $nSchedulerMinute;

	/** @var int nSchedulerDayValue */
	public $nSchedulerDayValue;

	/** @var int nSchedulerMonthValue */
	public $nSchedulerMonthValue;
}
