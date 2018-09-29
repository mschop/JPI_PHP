<?php

namespace App\Db\Schema;

class tKundenGruppeAttribute
{
	const TABLE_NAME = 'tKundenGruppeAttribute';
	const kKundenGruppeAttribute = 'kKundenGruppeAttribute';
	const kKundenGruppe = 'kKundenGruppe';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kKundenGruppeAttribute', 'kKundenGruppe', 'cName', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kKundenGruppeAttribute' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenGruppe' => [
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
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kKundenGruppeAttribute */
	public $kKundenGruppeAttribute;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
