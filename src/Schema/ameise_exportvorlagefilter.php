<?php

namespace App\Schema;

class ameise_exportvorlagefilter
{
	const TABLE_NAME = 'ameise_exportvorlagefilter';
	const kExportVorlageFilter = 'kExportVorlageFilter';
	const kStandardfilter = 'kStandardfilter';
	const cName = 'cName';
	const nFilterArt = 'nFilterArt';
	const cUebersicht = 'cUebersicht';
	const cExt = 'cExt';
	const cSortierSpalte = 'cSortierSpalte';
	const cSortierReihenfolge = 'cSortierReihenfolge';
	const dErstellt = 'dErstellt';
	const cExtMerkmale = 'cExtMerkmale';
	const cExtAttribute = 'cExtAttribute';
	const cExtEigeneFelder = 'cExtEigeneFelder';
	const COLUMN_NAMES = [
		'kExportVorlageFilter',
		'kStandardfilter',
		'cName',
		'nFilterArt',
		'cUebersicht',
		'cExt',
		'cSortierSpalte',
		'cSortierReihenfolge',
		'dErstellt',
		'cExtMerkmale',
		'cExtAttribute',
		'cExtEigeneFelder',
	];
	const COLUMN_TYPES = [
		'kExportVorlageFilter' => 'int',
		'kStandardfilter' => 'int',
		'cName' => 'varchar',
		'nFilterArt' => 'tinyint',
		'cUebersicht' => 'varchar',
		'cExt' => 'varchar',
		'cSortierSpalte' => 'varchar',
		'cSortierReihenfolge' => 'varchar',
		'dErstellt' => 'datetime',
		'cExtMerkmale' => 'varchar',
		'cExtAttribute' => 'varchar',
		'cExtEigeneFelder' => 'varchar',
	];

	/** @var int kExportVorlageFilter */
	public $kExportVorlageFilter;

	/** @var int kStandardfilter */
	public $kStandardfilter;

	/** @var string cName */
	public $cName;

	/** @var int nFilterArt */
	public $nFilterArt;

	/** @var string cUebersicht */
	public $cUebersicht;

	/** @var string cExt */
	public $cExt;

	/** @var string cSortierSpalte */
	public $cSortierSpalte;

	/** @var string cSortierReihenfolge */
	public $cSortierReihenfolge;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cExtMerkmale */
	public $cExtMerkmale;

	/** @var string cExtAttribute */
	public $cExtAttribute;

	/** @var string cExtEigeneFelder */
	public $cExtEigeneFelder;
}
