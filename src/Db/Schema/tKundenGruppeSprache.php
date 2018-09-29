<?php

namespace App\Db\Schema;

class tKundenGruppeSprache
{
	const TABLE_NAME = 'tKundenGruppeSprache';
	const kKundenGruppe = 'kKundenGruppe';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kKundenGruppe', 'kSprache', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
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
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
