<?php

namespace App\Db\Schema;

class tSessionId
{
	const TABLE_NAME = 'tSessionId';
	const kSessionId = 'kSessionId';
	const cRechnername = 'cRechnername';
	const kBenutzer = 'kBenutzer';
	const dLastAction = 'dLastAction';
	const COLUMN_NAMES = ['kSessionId', 'cRechnername', 'kBenutzer', 'dLastAction'];
	const COLUMN_DEFINITIONS = [
		'kSessionId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnername' => [
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
		'dLastAction' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
