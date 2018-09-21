<?php

namespace App\Schema;

class tBundesland
{
	const TABLE_NAME = 'tBundesland';
	const cISOLand = 'cISOLand';
	const cBundesland = 'cBundesland';
	const cKuerzelBundesland = 'cKuerzelBundesland';
	const COLUMN_NAMES = ['cISOLand', 'cBundesland', 'cKuerzelBundesland'];
	const COLUMN_TYPES = ['cISOLand' => 'varchar', 'cBundesland' => 'varchar', 'cKuerzelBundesland' => 'varchar'];

	/** @var string cISOLand */
	public $cISOLand;

	/** @var string cBundesland */
	public $cBundesland;

	/** @var string cKuerzelBundesland */
	public $cKuerzelBundesland;
}
