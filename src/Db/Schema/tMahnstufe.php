<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kMahnstufe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStufe' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKarenzzeit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nZahlungsfristInTagen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGebuehrPauschal' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGebuehrZinssatz' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
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
