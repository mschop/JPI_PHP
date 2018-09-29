<?php

namespace App\Db\Schema;

class tStampit
{
	const TABLE_NAME = 'tStampit';
	const nAktiv = 'nAktiv';
	const COLUMN_NAMES = ['nAktiv'];
	const COLUMN_DEFINITIONS = [
		'nAktiv' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int nAktiv */
	public $nAktiv;
}
