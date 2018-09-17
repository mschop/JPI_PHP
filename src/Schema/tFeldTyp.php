<?php

namespace App\Schema;

class tFeldTyp
{
	const TABLE_NAME = 'tFeldTyp';
	const kFeldTyp = 'kFeldTyp';
	const cName = 'cName';
	const nDatenTyp = 'nDatenTyp';
	const cRegEx = 'cRegEx';

	/** @var int kFeldTyp */
	public $kFeldTyp;

	/** @var resource cName */
	public $cName;

	/** @var int nDatenTyp */
	public $nDatenTyp;

	/** @var resource cRegEx */
	public $cRegEx;
}
