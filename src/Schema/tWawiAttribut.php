<?php

namespace App\Schema;

class tWawiAttribut
{
	const TABLE_NAME = 'tWawiAttribut';
	const kWawiAttribut = 'kWawiAttribut';
	const kAttribut = 'kAttribut';
	const COLUMN_NAMES = ['kWawiAttribut', 'kAttribut'];
	const COLUMN_TYPES = ['kWawiAttribut' => 'int', 'kAttribut' => 'int'];

	/** @var int kWawiAttribut */
	public $kWawiAttribut;

	/** @var int kAttribut */
	public $kAttribut;
}
