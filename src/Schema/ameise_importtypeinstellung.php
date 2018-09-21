<?php

namespace App\Schema;

class ameise_importtypeinstellung
{
	const TABLE_NAME = 'ameise_importtypeinstellung';
	const kImportTypEinstellung = 'kImportTypEinstellung';
	const kImportTyp = 'kImportTyp';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kImportTypEinstellung', 'kImportTyp', 'cName', 'nSort'];
	const COLUMN_TYPES = ['kImportTypEinstellung' => 'int', 'kImportTyp' => 'int', 'cName' => 'varchar', 'nSort' => 'int'];

	/** @var int kImportTypEinstellung */
	public $kImportTypEinstellung;

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
