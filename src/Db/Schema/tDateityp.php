<?php

namespace App\Db\Schema;

class tDateityp
{
	const TABLE_NAME = 'tDateityp';
	const cDateityp = 'cDateityp';
	const COLUMN_NAMES = ['cDateityp'];
	const COLUMN_DEFINITIONS = [
		'cDateityp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cDateityp */
	public $cDateityp;
}
