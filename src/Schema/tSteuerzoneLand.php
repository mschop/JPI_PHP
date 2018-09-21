<?php

namespace App\Schema;

class tSteuerzoneLand
{
	const TABLE_NAME = 'tSteuerzoneLand';
	const kSteuerzone = 'kSteuerzone';
	const cISO = 'cISO';
	const cKuerzelBundesland = 'cKuerzelBundesland';
	const COLUMN_NAMES = ['kSteuerzone', 'cISO', 'cKuerzelBundesland'];
	const COLUMN_TYPES = ['kSteuerzone' => 'int', 'cISO' => 'varchar', 'cKuerzelBundesland' => 'varchar'];

	/** @var int kSteuerzone */
	public $kSteuerzone;

	/** @var string cISO */
	public $cISO;

	/** @var string cKuerzelBundesland */
	public $cKuerzelBundesland;
}
