<?php

namespace App\Db\Schema;

class tversion
{
	const TABLE_NAME = 'tversion';
	const cVersion = 'cVersion';
	const COLUMN_NAMES = ['cVersion'];
	const COLUMN_DEFINITIONS = [
		'cVersion' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cVersion */
	public $cVersion;
}
