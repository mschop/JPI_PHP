<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kWorkflow' => 'int',
		'cName' => 'varchar',
		'nEvent' => 'int',
		'nObjekt' => 'int',
		'nVerknuepfung' => 'int',
		'nPos' => 'int',
		'nTyp' => 'int',
		'nApplikation' => 'int',
		'nSchedulerOptions' => 'bigint',
		'dtSchedulerTime' => 'datetime',
		'nSchedulerHour' => 'int',
		'nSchedulerMinute' => 'int',
		'nSchedulerDayValue' => 'int',
		'nSchedulerMonthValue' => 'int',
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
