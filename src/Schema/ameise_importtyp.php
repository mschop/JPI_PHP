<?php

namespace App\Schema;

class ameise_importtyp
{
	const TABLE_NAME = 'ameise_importtyp';
	const kImportTyp = 'kImportTyp';
	const kImportTypParent = 'kImportTypParent';
	const cName = 'cName';
	const nSort = 'nSort';

	/** @var int kImportTyp */
	public $kImportTyp;

	/** @var int kImportTypParent */
	public $kImportTypParent;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
