<?php

namespace App\Schema;

class ameise_importvorlagefeldps
{
	const TABLE_NAME = 'ameise_importvorlagefeldps';
	const kImportVorlageFeldPS = 'kImportVorlageFeldPS';
	const kImportVorlage = 'kImportVorlage';
	const cTable = 'cTable';
	const cDBName = 'cDBName';
	const cPraefix = 'cPraefix';
	const cSuffix = 'cSuffix';

	/** @var int kImportVorlageFeldPS */
	public $kImportVorlageFeldPS;

	/** @var int kImportVorlage */
	public $kImportVorlage;

	/** @var string cTable */
	public $cTable;

	/** @var string cDBName */
	public $cDBName;

	/** @var string cPraefix */
	public $cPraefix;

	/** @var string cSuffix */
	public $cSuffix;
}
