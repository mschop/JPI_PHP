<?php

namespace App\Schema;

class tAdressExportFelder
{
	const TABLE_NAME = 'tAdressExportFelder';
	const kAdressExportVorlage = 'kAdressExportVorlage';
	const nFeldNr = 'nFeldNr';
	const cPrefix = 'cPrefix';
	const cWert = 'cWert';
	const cSuffix = 'cSuffix';
	const cStandardWert = 'cStandardWert';
	const cName = 'cName';
	const nMaxlen = 'nMaxlen';
	const cZusatzzeile = 'cZusatzzeile';
	const COLUMN_NAMES = [
		'kAdressExportVorlage',
		'nFeldNr',
		'cPrefix',
		'cWert',
		'cSuffix',
		'cStandardWert',
		'cName',
		'nMaxlen',
		'cZusatzzeile',
	];
	const COLUMN_TYPES = [
		'kAdressExportVorlage' => 'int',
		'nFeldNr' => 'int',
		'cPrefix' => 'varchar',
		'cWert' => 'varchar',
		'cSuffix' => 'varchar',
		'cStandardWert' => 'varchar',
		'cName' => 'varchar',
		'nMaxlen' => 'int',
		'cZusatzzeile' => 'varchar',
	];

	/** @var int kAdressExportVorlage */
	public $kAdressExportVorlage;

	/** @var int nFeldNr */
	public $nFeldNr;

	/** @var string cPrefix */
	public $cPrefix;

	/** @var string cWert */
	public $cWert;

	/** @var string cSuffix */
	public $cSuffix;

	/** @var string cStandardWert */
	public $cStandardWert;

	/** @var string cName */
	public $cName;

	/** @var int nMaxlen */
	public $nMaxlen;

	/** @var string cZusatzzeile */
	public $cZusatzzeile;
}
