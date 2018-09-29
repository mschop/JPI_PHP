<?php

namespace App\Db\Schema;

class tVersandTrackingQueue
{
	const TABLE_NAME = 'tVersandTrackingQueue';
	const kVersand = 'kVersand';
	const dUpdated = 'dUpdated';
	const COLUMN_NAMES = ['kVersand', 'dUpdated'];
	const COLUMN_DEFINITIONS = [
		'kVersand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dUpdated' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kVersand */
	public $kVersand;

	/** @var string dUpdated */
	public $dUpdated;
}
