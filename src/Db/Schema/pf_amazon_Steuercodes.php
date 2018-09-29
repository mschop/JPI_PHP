<?php

namespace App\Db\Schema;

class pf_amazon_Steuercodes
{
	const TABLE_NAME = 'pf_amazon_Steuercodes';
	const kSteuercode = 'kSteuercode';
	const cName = 'cName';
	const COLUMN_NAMES = ['kSteuercode', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kSteuercode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 40,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kSteuercode */
	public $kSteuercode;

	/** @var string cName */
	public $cName;
}
