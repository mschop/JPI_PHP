<?php

namespace App\Db\Schema;

class tSteuerzoneLand
{
	const TABLE_NAME = 'tSteuerzoneLand';
	const kSteuerzone = 'kSteuerzone';
	const cISO = 'cISO';
	const cKuerzelBundesland = 'cKuerzelBundesland';
	const COLUMN_NAMES = ['kSteuerzone', 'cISO', 'cKuerzelBundesland'];
	const COLUMN_DEFINITIONS = [
		'kSteuerzone' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cKuerzelBundesland' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kSteuerzone */
	public $kSteuerzone;

	/** @var string cISO */
	public $cISO;

	/** @var string cKuerzelBundesland */
	public $cKuerzelBundesland;
}
