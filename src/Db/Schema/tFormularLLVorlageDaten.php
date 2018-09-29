<?php

namespace App\Db\Schema;

class tFormularLLVorlageDaten
{
	const TABLE_NAME = 'tFormularLLVorlageDaten';
	const kFormularLLVorlageDaten = 'kFormularLLVorlageDaten';
	const dAktualisiert = 'dAktualisiert';
	const bDaten = 'bDaten';
	const COLUMN_NAMES = ['kFormularLLVorlageDaten', 'dAktualisiert', 'bDaten'];
	const COLUMN_DEFINITIONS = [
		'kFormularLLVorlageDaten' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAktualisiert' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bDaten' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
	];

	/** @var int kFormularLLVorlageDaten */
	public $kFormularLLVorlageDaten;

	/** @var string dAktualisiert */
	public $dAktualisiert;

	/** @var resource bDaten */
	public $bDaten;
}
