<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kHersteller' => 'int',
		'cName' => 'varchar',
		'cHomepage' => 'varchar',
		'nSort' => 'int',
		'cMetaTitle' => 'varchar',
		'cMetaKeywords' => 'varchar',
		'cMetaDescription' => 'varchar',
		'cBeschreibung' => 'varchar',
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
