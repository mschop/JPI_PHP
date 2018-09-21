<?php

namespace App\Schema;

class tFeldTyp
{
	const TABLE_NAME = 'tFeldTyp';
	const kFeldTyp = 'kFeldTyp';
	const cName = 'cName';
	const nDatenTyp = 'nDatenTyp';
	const cRegEx = 'cRegEx';
	const COLUMN_NAMES = ['kFeldTyp', 'cName', 'nDatenTyp', 'cRegEx'];
	const COLUMN_TYPES = ['kFeldTyp' => 'int', 'cName' => 'nvarchar', 'nDatenTyp' => 'tinyint', 'cRegEx' => 'nvarchar'];

	/** @var int kFeldTyp */
	public $kFeldTyp;

	/** @var resource cName */
	public $cName;

	/** @var int nDatenTyp */
	public $nDatenTyp;

	/** @var resource cRegEx */
	public $cRegEx;
}
