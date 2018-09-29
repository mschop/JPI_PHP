<?php

namespace App\Db\Schema;

class ebay_geaenderte_laufende_angebote
{
	const TABLE_NAME = 'ebay_geaenderte_laufende_angebote';
	const kItem = 'kItem';
	const nChanges = 'nChanges';
	const nTryUpload = 'nTryUpload';
	const COLUMN_NAMES = ['kItem', 'nChanges', 'nTryUpload'];
	const COLUMN_DEFINITIONS = [
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nChanges' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTryUpload' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kItem */
	public $kItem;

	/** @var int nChanges */
	public $nChanges;

	/** @var int nTryUpload */
	public $nTryUpload;
}
