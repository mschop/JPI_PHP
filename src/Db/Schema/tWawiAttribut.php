<?php

namespace App\Db\Schema;

class tWawiAttribut
{
	const TABLE_NAME = 'tWawiAttribut';
	const kWawiAttribut = 'kWawiAttribut';
	const kAttribut = 'kAttribut';
	const COLUMN_NAMES = ['kWawiAttribut', 'kAttribut'];
	const COLUMN_DEFINITIONS = [
		'kWawiAttribut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAttribut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWawiAttribut */
	public $kWawiAttribut;

	/** @var int kAttribut */
	public $kAttribut;
}
