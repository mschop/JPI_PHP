<?php

namespace App\Db\Schema;

class tHersteller
{
	const TABLE_NAME = 'tHersteller';
	const kHersteller = 'kHersteller';
	const cName = 'cName';
	const cHomepage = 'cHomepage';
	const nSort = 'nSort';
	const cMetaTitle = 'cMetaTitle';
	const cMetaKeywords = 'cMetaKeywords';
	const cMetaDescription = 'cMetaDescription';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = [
		'kHersteller',
		'cName',
		'cHomepage',
		'nSort',
		'cMetaTitle',
		'cMetaKeywords',
		'cMetaDescription',
		'cBeschreibung',
	];
	const COLUMN_DEFINITIONS = [
		'kHersteller' => [
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
		'cHomepage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMetaTitle' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
		'cMetaKeywords' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'iso_1',
		],
		'cMetaDescription' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kHersteller */
	public $kHersteller;

	/** @var string cName */
	public $cName;

	/** @var string cHomepage */
	public $cHomepage;

	/** @var int nSort */
	public $nSort;

	/** @var string cMetaTitle */
	public $cMetaTitle;

	/** @var string cMetaKeywords */
	public $cMetaKeywords;

	/** @var string cMetaDescription */
	public $cMetaDescription;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
