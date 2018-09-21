<?php

namespace App\Schema;

class tVersandTrackingQueue
{
	const TABLE_NAME = 'tVersandTrackingQueue';
	const kVersand = 'kVersand';
	const dUpdated = 'dUpdated';
	const COLUMN_NAMES = ['kVersand', 'dUpdated'];
	const COLUMN_TYPES = ['kVersand' => 'int', 'dUpdated' => 'datetime'];

	/** @var int kVersand */
	public $kVersand;

	/** @var string dUpdated */
	public $dUpdated;
}
