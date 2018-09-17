<?php

namespace App\Schema;

class tLaufendeNummern
{
	const TABLE_NAME = 'tLaufendeNummern';
	const kLaufendeNummer = 'kLaufendeNummer';
	const cName = 'cName';
	const nNummer = 'nNummer';
	const cPrefix = 'cPrefix';
	const cSuffix = 'cSuffix';
	const kFirma = 'kFirma';
	const cTable = 'cTable';
	const cColumn = 'cColumn';

	/** @var int kLaufendeNummer */
	public $kLaufendeNummer;

	/** @var string cName */
	public $cName;

	/** @var int nNummer */
	public $nNummer;

	/** @var string cPrefix */
	public $cPrefix;

	/** @var string cSuffix */
	public $cSuffix;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cTable */
	public $cTable;

	/** @var string cColumn */
	public $cColumn;
}
