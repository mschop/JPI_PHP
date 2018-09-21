<?php

namespace App\Schema;

class tLHMAttribut
{
	const TABLE_NAME = 'tLHMAttribut';
	const kLHMAttribut = 'kLHMAttribut';
	const kLHM = 'kLHM';
	const cAttribut = 'cAttribut';
	const COLUMN_NAMES = ['kLHMAttribut', 'kLHM', 'cAttribut'];
	const COLUMN_TYPES = ['kLHMAttribut' => 'int', 'kLHM' => 'int', 'cAttribut' => 'varchar'];

	/** @var int kLHMAttribut */
	public $kLHMAttribut;

	/** @var int kLHM */
	public $kLHM;

	/** @var string cAttribut */
	public $cAttribut;
}
