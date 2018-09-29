<?php

namespace App\Db\Schema;

class tLHMStatus
{
	const TABLE_NAME = 'tLHMStatus';
	const kLHMStatus = 'kLHMStatus';
	const kLHM = 'kLHM';
	const nStatus = 'nStatus';
	const dZeitstempel = 'dZeitstempel';
	const kBestellung = 'kBestellung';
	const COLUMN_NAMES = ['kLHMStatus', 'kLHM', 'nStatus', 'dZeitstempel', 'kBestellung'];
	const COLUMN_DEFINITIONS = [
		'kLHMStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLHM' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
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
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kLHMStatus */
	public $kLHMStatus;

	/** @var int kLHM */
	public $kLHM;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBestellung */
	public $kBestellung;
}
