<?php

namespace App\Schema;

class tArtikelAttributSprache
{
	const TABLE_NAME = 'tArtikelAttributSprache';
	const kArtikelAttribut = 'kArtikelAttribut';
	const kSprache = 'kSprache';
	const cWertVarchar = 'cWertVarchar';
	const nWertInt = 'nWertInt';
	const fWertDecimal = 'fWertDecimal';
	const dWertDateTime = 'dWertDateTime';
	const COLUMN_NAMES = ['kArtikelAttribut', 'kSprache', 'cWertVarchar', 'nWertInt', 'fWertDecimal', 'dWertDateTime'];
	const COLUMN_TYPES = [
		'kArtikelAttribut' => 'int',
		'kSprache' => 'int',
		'cWertVarchar' => 'nvarchar',
		'nWertInt' => 'int',
		'fWertDecimal' => 'decimal',
		'dWertDateTime' => 'datetime',
	];

	/** @var int kArtikelAttribut */
	public $kArtikelAttribut;

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
