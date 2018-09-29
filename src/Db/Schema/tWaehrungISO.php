<?php

namespace App\Db\Schema;

class tWaehrungISO
{
	const TABLE_NAME = 'tWaehrungISO';
	const cISO = 'cISO';
	const cName = 'cName';
	const cLand = 'cLand';
	const COLUMN_NAMES = ['cISO', 'cName', 'cLand'];
	const COLUMN_DEFINITIONS = [
		'cISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLand' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cISO */
	public $cISO;

	/** @var string cName */
	public $cName;

	/** @var string cLand */
	public $cLand;
}
