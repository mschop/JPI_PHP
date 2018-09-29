<?php

namespace App\Db\Schema;

class ameise_importvorlagefeld
{
	const TABLE_NAME = 'ameise_importvorlagefeld';
	const kImportVorlageFeld = 'kImportVorlageFeld';
	const kImportVorlage = 'kImportVorlage';
	const cTable = 'cTable';
	const cDBName = 'cDBName';
	const nSpalte = 'nSpalte';
	const nKey = 'nKey';
	const nKey2 = 'nKey2';
	const cStandardWert = 'cStandardWert';
	const nTyp = 'nTyp';
	const cExt = 'cExt';
	const cName = 'cName';
	const cDBTyp = 'cDBTyp';
	const nLaenge = 'nLaenge';
	const cValidation = 'cValidation';
	const COLUMN_NAMES = [
		'kImportVorlageFeld',
		'kImportVorlage',
		'cTable',
		'cDBName',
		'nSpalte',
		'nKey',
		'nKey2',
		'cStandardWert',
		'nTyp',
		'cExt',
		'cName',
		'cDBTyp',
		'nLaenge',
		'cValidation',
	];
	const COLUMN_DEFINITIONS = [
		'kImportVorlageFeld' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kImportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTable' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDBName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSpalte' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKey' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKey2' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStandardWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cExt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDBTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'nLaenge' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cValidation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kImportVorlageFeld */
	public $kImportVorlageFeld;

	/** @var int kImportVorlage */
	public $kImportVorlage;

	/** @var string cTable */
	public $cTable;

	/** @var string cDBName */
	public $cDBName;

	/** @var int nSpalte */
	public $nSpalte;

	/** @var int nKey */
	public $nKey;

	/** @var int nKey2 */
	public $nKey2;

	/** @var string cStandardWert */
	public $cStandardWert;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cExt */
	public $cExt;

	/** @var string cName */
	public $cName;

	/** @var string cDBTyp */
	public $cDBTyp;

	/** @var int nLaenge */
	public $nLaenge;

	/** @var string cValidation */
	public $cValidation;
}
