<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kVersandTrackingInfo' => [
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
			'isNullable' => true,
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
		'cStatusExtern' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'cLocation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
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
