<?php

namespace App\Db\Schema;

class tFormularEMailEinstellung
{
	const TABLE_NAME = 'tFormularEMailEinstellung';
	const kFormularEMailEinstellung = 'kFormularEMailEinstellung';
	const kFormular = 'kFormular';
	const cBcc = 'cBcc';
	const nSignieren = 'nSignieren';
	const COLUMN_NAMES = ['kFormularEMailEinstellung', 'kFormular', 'cBcc', 'nSignieren'];
	const COLUMN_DEFINITIONS = [
		'kFormularEMailEinstellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormular' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBcc' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 127,
			'characterSetName' => 'iso_1',
		],
		'nSignieren' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kFormularEMailEinstellung */
	public $kFormularEMailEinstellung;

	/** @var int kFormular */
	public $kFormular;

	/** @var string cBcc */
	public $cBcc;

	/** @var int nSignieren */
	public $nSignieren;
}
