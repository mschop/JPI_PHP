<?php

namespace App\Db\Schema;

class tBestellungAttributeKey
{
	const TABLE_NAME = 'tBestellungAttributeKey';
	const kBestellungAttributeKey = 'kBestellungAttributeKey';
	const cName = 'cName';
	const COLUMN_NAMES = ['kBestellungAttributeKey', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kBestellungAttributeKey' => [
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
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBestellungAttributeKey */
	public $kBestellungAttributeKey;

	/** @var string cName */
	public $cName;
}
