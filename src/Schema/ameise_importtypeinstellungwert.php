<?php

namespace App\Schema;

class ameise_importtypeinstellungwert
{
	const TABLE_NAME = 'ameise_importtypeinstellungwert';
	const kImportTypEinstellungWert = 'kImportTypEinstellungWert';
	const kImportTypEinstellung = 'kImportTypEinstellung';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kImportTypEinstellungWert', 'kImportTypEinstellung', 'cName', 'nSort'];
	const COLUMN_TYPES = [
		'kImportTypEinstellungWert' => 'int',
		'kImportTypEinstellung' => 'int',
		'cName' => 'varchar',
		'nSort' => 'int',
	];

	/** @var int kImportTypEinstellungWert */
	public $kImportTypEinstellungWert;

	/** @var int kImportTypEinstellung */
	public $kImportTypEinstellung;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
