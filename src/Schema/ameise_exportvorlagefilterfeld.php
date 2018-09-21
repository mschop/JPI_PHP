<?php

namespace App\Schema;

class ameise_exportvorlagefilterfeld
{
	const TABLE_NAME = 'ameise_exportvorlagefilterfeld';
	const kExportVorlageFilterFeld = 'kExportVorlageFilterFeld';
	const kExportVorlageFilter = 'kExportVorlageFilter';
	const cDBName = 'cDBName';
	const nOperator = 'nOperator';
	const cWert = 'cWert';
	const cTable = 'cTable';
	const COLUMN_NAMES = ['kExportVorlageFilterFeld', 'kExportVorlageFilter', 'cDBName', 'nOperator', 'cWert', 'cTable'];
	const COLUMN_TYPES = [
		'kExportVorlageFilterFeld' => 'int',
		'kExportVorlageFilter' => 'int',
		'cDBName' => 'varchar',
		'nOperator' => 'tinyint',
		'cWert' => 'varchar',
		'cTable' => 'varchar',
	];

	/** @var int kExportVorlageFilterFeld */
	public $kExportVorlageFilterFeld;

	/** @var int kExportVorlageFilter */
	public $kExportVorlageFilter;

	/** @var string cDBName */
	public $cDBName;

	/** @var int nOperator */
	public $nOperator;

	/** @var string cWert */
	public $cWert;

	/** @var string cTable */
	public $cTable;
}
