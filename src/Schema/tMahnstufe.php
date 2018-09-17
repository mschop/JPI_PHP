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
