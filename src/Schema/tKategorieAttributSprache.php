<?php

namespace App\Schema;

class tKategorieAttributSprache
{
	const TABLE_NAME = 'tKategorieAttributSprache';
	const kKategorieAttribut = 'kKategorieAttribut';
	const kSprache = 'kSprache';
	const cWertVarchar = 'cWertVarchar';
	const nWertInt = 'nWertInt';
	const fWertDecimal = 'fWertDecimal';
	const dWertDateTime = 'dWertDateTime';

	/** @var int kKategorieAttribut */
	public $kKategorieAttribut;

	/** @var int kSprache */
	public $kSprache;

	/** @var resource cWertVarchar */
	public $cWertVarchar;

	/** @var int nWertInt */
	public $nWertInt;

	/** @var string fWertDecimal */
	public $fWertDecimal;

	/** @var string dWertDateTime */
	public $dWertDateTime;
}
