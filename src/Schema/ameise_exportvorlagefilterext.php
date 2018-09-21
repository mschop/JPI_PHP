<?php

namespace App\Schema;

class ameise_exportvorlagefilterext
{
	const TABLE_NAME = 'ameise_exportvorlagefilterext';
	const kExportVorlageFilterExt = 'kExportVorlageFilterExt';
	const kExportVorlageFilter = 'kExportVorlageFilter';
	const cName = 'cName';
	const cAdd = 'cAdd';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kExportVorlageFilterExt', 'kExportVorlageFilter', 'cName', 'cAdd', 'cWert'];
	const COLUMN_TYPES = [
		'kExportVorlageFilterExt' => 'int',
		'kExportVorlageFilter' => 'int',
		'cName' => 'varchar',
		'cAdd' => 'varchar',
		'cWert' => 'varchar',
	];

	/** @var int kExportVorlageFilterExt */
	public $kExportVorlageFilterExt;

	/** @var int kExportVorlageFilter */
	public $kExportVorlageFilter;

	/** @var string cName */
	public $cName;

	/** @var string cAdd */
	public $cAdd;

	/** @var string cWert */
	public $cWert;
}
