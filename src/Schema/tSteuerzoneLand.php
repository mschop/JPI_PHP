<?php

namespace App\Schema;

class tSteuerzoneLand
{
	const TABLE_NAME = 'tSteuerzoneLand';
	const kSteuerzone = 'kSteuerzone';
	const cISO = 'cISO';
	const cKuerzelBundesland = 'cKuerzelBundesland';

	/** @var int kSteuerzone */
	public $kSteuerzone;

	/** @var string cISO */
	public $cISO;

	/** @var string cKuerzelBundesland */
	public $cKuerzelBundesland;
}
