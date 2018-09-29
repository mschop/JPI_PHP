<?php

namespace App\Db\Schema;

class tVersandLog
{
	const TABLE_NAME = 'tVersandLog';
	const kVersandLog = 'kVersandLog';
	const kVersand = 'kVersand';
	const dZeitstempel = 'dZeitstempel';
	const nStatus = 'nStatus';
	const cMessage = 'cMessage';
	const COLUMN_NAMES = ['kVersandLog', 'kVersand', 'dZeitstempel', 'nStatus', 'cMessage'];
	const COLUMN_DEFINITIONS = [
		'kVersandLog' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kVersandLog */
	public $kVersandLog;

	/** @var int kVersand */
	public $kVersand;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cMessage */
	public $cMessage;
}
