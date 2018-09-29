<?php

namespace App\Db\Schema;

class pf_amazon_xml_version
{
	const TABLE_NAME = 'pf_amazon_xml_version';
	const nVersion = 'nVersion';
	const nSQLKorrekt = 'nSQLKorrekt';
	const COLUMN_NAMES = ['nVersion', 'nSQLKorrekt'];
	const COLUMN_DEFINITIONS = [
		'nVersion' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSQLKorrekt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int nVersion */
	public $nVersion;

	/** @var int nSQLKorrekt */
	public $nSQLKorrekt;
}
