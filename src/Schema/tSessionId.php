<?php

namespace App\Schema;

class tSessionId
{
	const TABLE_NAME = 'tSessionId';
	const kSessionId = 'kSessionId';
	const cRechnername = 'cRechnername';
	const kBenutzer = 'kBenutzer';
	const dLastAction = 'dLastAction';
	const COLUMN_NAMES = ['kSessionId', 'cRechnername', 'kBenutzer', 'dLastAction'];
	const COLUMN_TYPES = [
		'kSessionId' => 'int',
		'cRechnername' => 'varchar',
		'kBenutzer' => 'int',
		'dLastAction' => 'datetime',
	];

	/** @var int kSessionId */
	public $kSessionId;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dLastAction */
	public $dLastAction;
}
