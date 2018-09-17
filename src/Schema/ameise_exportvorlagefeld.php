<?php

namespace App\Schema;

class ameise_exportvorlagefeld
{
	const TABLE_NAME = 'ameise_exportvorlagefeld';
	const kExportVorlageFeld = 'kExportVorlageFeld';
	const kExportVorlage = 'kExportVorlage';
	const cName = 'cName';
	const cDBName = 'cDBName';
	const cKopfzeilenbeschriftung = 'cKopfzeilenbeschriftung';
	const nSpalte = 'nSpalte';

	/** @var int kExportVorlageFeld */
	public $kExportVorlageFeld;

	/** @var int kExportVorlage */
	public $kExportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cDBName */
	public $cDBName;

	/** @var string cKopfzeilenbeschriftung */
	public $cKopfzeilenbeschriftung;

	/** @var int nSpalte */
	public $nSpalte;
}
