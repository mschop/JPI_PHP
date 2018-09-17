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
