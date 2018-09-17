<?php

namespace App\Schema;

class tLogistik
{
	const TABLE_NAME = 'tLogistik';
	const kLogistik = 'kLogistik';
	const cName = 'cName';
	const cURL = 'cURL';
	const nStandard = 'nStandard';
	const cAmazonCC = 'cAmazonCC';
	const cEbayCC = 'cEbayCC';
	const kVersanddatenExportVorlage = 'kVersanddatenExportVorlage';
	const kVersanddatenImportVorlage = 'kVersanddatenImportVorlage';
	const nPaketeAutomatischErzeugen = 'nPaketeAutomatischErzeugen';
	const fMaxGewicht = 'fMaxGewicht';

	/** @var int kLogistik */
	public $kLogistik;

	/** @var string cName */
	public $cName;

	/** @var string cURL */
	public $cURL;

	/** @var int nStandard */
	public $nStandard;

	/** @var string cAmazonCC */
	public $cAmazonCC;

	/** @var string cEbayCC */
	public $cEbayCC;

	/** @var int kVersanddatenExportVorlage */
	public $kVersanddatenExportVorlage;

	/** @var int kVersanddatenImportVorlage */
	public $kVersanddatenImportVorlage;

	/** @var int nPaketeAutomatischErzeugen */
	public $nPaketeAutomatischErzeugen;

	/** @var string fMaxGewicht */
	public $fMaxGewicht;
}
