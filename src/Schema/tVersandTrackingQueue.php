<?php

namespace App\Schema;

class tVersandTrackingQueue
{
	const TABLE_NAME = 'tVersandTrackingQueue';
	const kVersand = 'kVersand';
	const dUpdated = 'dUpdated';

	/** @var int kVersand */
	public $kVersand;

	/** @var string dUpdated */
	public $dUpdated;
}
