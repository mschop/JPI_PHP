<?php

namespace App\Schema;

class tVersandTrackingInfo
{
	const TABLE_NAME = 'tVersandTrackingInfo';
	const kVersandTrackingInfo = 'kVersandTrackingInfo';
	const kVersand = 'kVersand';
	const dZeitstempel = 'dZeitstempel';
	const nStatus = 'nStatus';
	const cStatusExtern = 'cStatusExtern';
	const cMessage = 'cMessage';
	const cLocation = 'cLocation';
	const COLUMN_NAMES = [
		'kVersandTrackingInfo',
		'kVersand',
		'dZeitstempel',
		'nStatus',
		'cStatusExtern',
		'cMessage',
		'cLocation',
	];
	const COLUMN_TYPES = [
		'kVersandTrackingInfo' => 'int',
		'kVersand' => 'int',
		'dZeitstempel' => 'datetime',
		'nStatus' => 'tinyint',
		'cStatusExtern' => 'varchar',
		'cMessage' => 'varchar',
		'cLocation' => 'varchar',
	];

	/** @var int kVersandTrackingInfo */
	public $kVersandTrackingInfo;

	/** @var int kVersand */
	public $kVersand;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cStatusExtern */
	public $cStatusExtern;

	/** @var string cMessage */
	public $cMessage;

	/** @var string cLocation */
	public $cLocation;
}
