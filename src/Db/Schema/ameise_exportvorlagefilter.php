<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kExportVorlageFilter' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStandardfilter' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
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
		'nFilterArt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cUebersicht' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
		'cExt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSortierSpalte' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSortierReihenfolge' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cExtMerkmale' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cExtAttribute' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cExtEigeneFelder' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
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
