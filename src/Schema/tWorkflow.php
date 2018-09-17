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
