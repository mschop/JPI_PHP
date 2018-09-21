<?php

namespace App\Schema;

class tWawiAttributSprache
{
	const TABLE_NAME = 'tWawiAttributSprache';
	const kWawiAttribut = 'kWawiAttribut';
	const kSprache = 'kSprache';
	const cWertVarchar = 'cWertVarchar';
	const nWertInt = 'nWertInt';
	const fWertDecimal = 'fWertDecimal';
	const dWertDateTime = 'dWertDateTime';
	const COLUMN_NAMES = ['kWawiAttribut', 'kSprache', 'cWertVarchar', 'nWertInt', 'fWertDecimal', 'dWertDateTime'];
	const COLUMN_TYPES = [
		'kWawiAttribut' => 'int',
		'kSprache' => 'int',
		'cWertVarchar' => 'nvarchar',
		'nWertInt' => 'int',
		'fWertDecimal' => 'decimal',
		'dWertDateTime' => 'datetime',
	];

	/** @var int kWawiAttribut */
	public $kWawiAttribut;

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
