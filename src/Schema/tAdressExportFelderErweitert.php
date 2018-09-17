<?php

namespace App\Schema;

class tAdressExportFelderErweitert
{
	const TABLE_NAME = 'tAdressExportFelderErweitert';
	const kAdressExportVorlage = 'kAdressExportVorlage';
	const nFeldNr = 'nFeldNr';
	const cName = 'cName';
	const cWert = 'cWert';
	const cZone = 'cZone';

	/** @var int kAdressExportVorlage */
	public $kAdressExportVorlage;

	/** @var int nFeldNr */
	public $nFeldNr;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;

	/** @var string cZone */
	public $cZone;
}
