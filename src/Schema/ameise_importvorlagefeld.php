<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kImportVorlageFeld' => 'int',
		'kImportVorlage' => 'int',
		'cTable' => 'varchar',
		'cDBName' => 'varchar',
		'nSpalte' => 'int',
		'nKey' => 'int',
		'nKey2' => 'int',
		'cStandardWert' => 'varchar',
		'nTyp' => 'tinyint',
		'cExt' => 'varchar',
		'cName' => 'varchar',
		'cDBTyp' => 'varchar',
		'nLaenge' => 'int',
		'cValidation' => 'varchar',
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
