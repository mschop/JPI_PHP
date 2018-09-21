<?php

namespace App\Schema;

class tMahnstufe
{
	const TABLE_NAME = 'tMahnstufe';
	const kMahnstufe = 'kMahnstufe';
	const kFirma = 'kFirma';
	const kKundengruppe = 'kKundengruppe';
	const nStufe = 'nStufe';
	const nKarenzzeit = 'nKarenzzeit';
	const nZahlungsfristInTagen = 'nZahlungsfristInTagen';
	const fGebuehrPauschal = 'fGebuehrPauschal';
	const fGebuehrZinssatz = 'fGebuehrZinssatz';
	const cName = 'cName';
	const COLUMN_NAMES = [
		'kMahnstufe',
		'kFirma',
		'kKundengruppe',
		'nStufe',
		'nKarenzzeit',
		'nZahlungsfristInTagen',
		'fGebuehrPauschal',
		'fGebuehrZinssatz',
		'cName',
	];
	const COLUMN_TYPES = [
		'kMahnstufe' => 'int',
		'kFirma' => 'int',
		'kKundengruppe' => 'int',
		'nStufe' => 'tinyint',
		'nKarenzzeit' => 'int',
		'nZahlungsfristInTagen' => 'int',
		'fGebuehrPauschal' => 'decimal',
		'fGebuehrZinssatz' => 'decimal',
		'cName' => 'varchar',
	];

	/** @var int kMahnstufe */
	public $kMahnstufe;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var int nStufe */
	public $nStufe;

	/** @var int nKarenzzeit */
	public $nKarenzzeit;

	/** @var int nZahlungsfristInTagen */
	public $nZahlungsfristInTagen;

	/** @var string fGebuehrPauschal */
	public $fGebuehrPauschal;

	/** @var string fGebuehrZinssatz */
	public $fGebuehrZinssatz;

	/** @var string cName */
	public $cName;
}
