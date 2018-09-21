<?php

namespace App\Schema;

class tHerstellerSprache
{
	const TABLE_NAME = 'tHerstellerSprache';
	const kHersteller = 'kHersteller';
	const kSprache = 'kSprache';
	const cMetaTitle = 'cMetaTitle';
	const cMetaKeywords = 'cMetaKeywords';
	const cMetaDescription = 'cMetaDescription';
	const cBeschreibung = 'cBeschreibung';
	const cSeo = 'cSeo';
	const COLUMN_NAMES = [
		'kHersteller',
		'kSprache',
		'cMetaTitle',
		'cMetaKeywords',
		'cMetaDescription',
		'cBeschreibung',
		'cSeo',
	];
	const COLUMN_TYPES = [
		'kHersteller' => 'int',
		'kSprache' => 'int',
		'cMetaTitle' => 'varchar',
		'cMetaKeywords' => 'varchar',
		'cMetaDescription' => 'varchar',
		'cBeschreibung' => 'varchar',
		'cSeo' => 'varchar',
	];

	/** @var int kHersteller */
	public $kHersteller;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cMetaTitle */
	public $cMetaTitle;

	/** @var string cMetaKeywords */
	public $cMetaKeywords;

	/** @var string cMetaDescription */
	public $cMetaDescription;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var string cSeo */
	public $cSeo;
}
