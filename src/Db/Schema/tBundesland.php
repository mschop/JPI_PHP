<?php

namespace App\Db\Schema;

class tBundesland
{
	const TABLE_NAME = 'tBundesland';
	const cISOLand = 'cISOLand';
	const cBundesland = 'cBundesland';
	const cKuerzelBundesland = 'cKuerzelBundesland';
	const COLUMN_NAMES = ['cISOLand', 'cBundesland', 'cKuerzelBundesland'];
	const COLUMN_DEFINITIONS = [
		'cISOLand' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cBundesland' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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

	/** @var string cISOLand */
	public $cISOLand;

	/** @var string cBundesland */
	public $cBundesland;

	/** @var string cKuerzelBundesland */
	public $cKuerzelBundesland;
}
