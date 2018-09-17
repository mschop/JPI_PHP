<?php

namespace App\Schema;

class tSprachen
{
	const TABLE_NAME = 'tSprachen';
	const kSprache = 'kSprache';
	const cNameEng = 'cNameEng';
	const cNameDeu = 'cNameDeu';
	const cISO = 'cISO';
	const cKultur = 'cKultur';
	const cISO2 = 'cISO2';

	/** @var int kSprache */
	public $kSprache;

	/** @var string cNameEng */
	public $cNameEng;

	/** @var string cNameDeu */
	public $cNameDeu;

	/** @var string cISO */
	public $cISO;

	/** @var resource cKultur */
	public $cKultur;

	/** @var string cISO2 */
	public $cISO2;
}
