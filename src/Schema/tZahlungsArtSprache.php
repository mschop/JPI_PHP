<?php

namespace App\Schema;

class tZahlungsArtSprache
{
	const TABLE_NAME = 'tZahlungsArtSprache';
	const kZahlungsart = 'kZahlungsart';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cPrtString = 'cPrtString';
	const cPrtStringVor = 'cPrtStringVor';
	const COLUMN_NAMES = ['kZahlungsart', 'kSprache', 'cName', 'cPrtString', 'cPrtStringVor'];
	const COLUMN_TYPES = [
		'kZahlungsart' => 'int',
		'kSprache' => 'int',
		'cName' => 'varchar',
		'cPrtString' => 'varchar',
		'cPrtStringVor' => 'varchar',
	];

	/** @var int kZahlungsart */
	public $kZahlungsart;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cPrtString */
	public $cPrtString;

	/** @var string cPrtStringVor */
	public $cPrtStringVor;
}
