<?php

namespace App\Schema;

class ameise_importtypfeld
{
	const TABLE_NAME = 'ameise_importtypfeld';
	const kImportTypFeld = 'kImportTypFeld';
	const kImportTyp = 'kImportTyp';
	const cName = 'cName';
	const cTable = 'cTable';
	const cDBName = 'cDBName';
	const cDBTyp = 'cDBTyp';
	const nLaenge = 'nLaenge';
	const nStandard = 'nStandard';
	const cStandardWert = 'cStandardWert';
	const cValidation = 'cValidation';
	const nSort = 'nSort';
	const COLUMN_NAMES = [
		'kImportTypFeld',
		'kImportTyp',
		'cName',
		'cTable',
		'cDBName',
		'cDBTyp',
		'nLaenge',
		'nStandard',
		'cStandardWert',
		'cValidation',
		'nSort',
	];
	const COLUMN_TYPES = [
		'kImportTypFeld' => 'int',
		'kImportTyp' => 'int',
		'cName' => 'varchar',
		'cTable' => 'varchar',
		'cDBName' => 'varchar',
		'cDBTyp' => 'varchar',
		'nLaenge' => 'int',
		'nStandard' => 'tinyint',
		'cStandardWert' => 'varchar',
		'cValidation' => 'varchar',
		'nSort' => 'int',
	];

	/** @var int kImportTypFeld */
	public $kImportTypFeld;

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var string cName */
	public $cName;

	/** @var string cTable */
	public $cTable;

	/** @var string cDBName */
	public $cDBName;

	/** @var string cDBTyp */
	public $cDBTyp;

	/** @var int nLaenge */
	public $nLaenge;

	/** @var int nStandard */
	public $nStandard;

	/** @var string cStandardWert */
	public $cStandardWert;

	/** @var string cValidation */
	public $cValidation;

	/** @var int nSort */
	public $nSort;
}
