<?php

namespace App\Schema;

class ameise_importvorlagefilter
{
	const TABLE_NAME = 'ameise_importvorlagefilter';
	const kImportVorlageFilter = 'kImportVorlageFilter';
	const kImportVorlage = 'kImportVorlage';
	const cName = 'cName';
	const cTable = 'cTable';
	const cDBName = 'cDBName';
	const cWert = 'cWert';
	const nOperator = 'nOperator';
	const cDBTyp = 'cDBTyp';
	const nLaenge = 'nLaenge';
	const cValidation = 'cValidation';
	const nSpalte = 'nSpalte';
	const COLUMN_NAMES = [
		'kImportVorlageFilter',
		'kImportVorlage',
		'cName',
		'cTable',
		'cDBName',
		'cWert',
		'nOperator',
		'cDBTyp',
		'nLaenge',
		'cValidation',
		'nSpalte',
	];
	const COLUMN_TYPES = [
		'kImportVorlageFilter' => 'int',
		'kImportVorlage' => 'int',
		'cName' => 'varchar',
		'cTable' => 'varchar',
		'cDBName' => 'varchar',
		'cWert' => 'varchar',
		'nOperator' => 'tinyint',
		'cDBTyp' => 'varchar',
		'nLaenge' => 'int',
		'cValidation' => 'varchar',
		'nSpalte' => 'int',
	];

	/** @var int kImportVorlageFilter */
	public $kImportVorlageFilter;

	/** @var int kImportVorlage */
	public $kImportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cTable */
	public $cTable;

	/** @var string cDBName */
	public $cDBName;

	/** @var string cWert */
	public $cWert;

	/** @var int nOperator */
	public $nOperator;

	/** @var string cDBTyp */
	public $cDBTyp;

	/** @var int nLaenge */
	public $nLaenge;

	/** @var string cValidation */
	public $cValidation;

	/** @var int nSpalte */
	public $nSpalte;
}
