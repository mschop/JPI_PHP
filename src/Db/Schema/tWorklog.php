<?php

namespace App\Db\Schema;

class tWorklog
{
	const TABLE_NAME = 'tWorklog';
	const kWorkerlog = 'kWorkerlog';
	const cMessage = 'cMessage';
	const nErrorID = 'nErrorID';
	const dDate = 'dDate';
	const COLUMN_NAMES = ['kWorkerlog', 'cMessage', 'nErrorID', 'dDate'];
	const COLUMN_DEFINITIONS = [
		'kWorkerlog' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nErrorID' => [
			'type' => 'bigint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWorkerlog */
	public $kWorkerlog;

	/** @var string cMessage */
	public $cMessage;

	/** @var int nErrorID */
	public $nErrorID;

	/** @var string dDate */
	public $dDate;
}
