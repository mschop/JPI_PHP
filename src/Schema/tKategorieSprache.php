<?php

namespace App\Schema;

class tKategorieSprache
{
	const TABLE_NAME = 'tKategorieSprache';
	const kKategorie = 'kKategorie';
	const kSprache = 'kSprache';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const cUrlPfad = 'cUrlPfad';
	const cMetaDescription = 'cMetaDescription';
	const cTitleTag = 'cTitleTag';
	const cMetaKeywords = 'cMetaKeywords';
	const COLUMN_NAMES = [
		'kKategorie',
		'kSprache',
		'kPlattform',
		'kShop',
		'cName',
		'cBeschreibung',
		'cUrlPfad',
		'cMetaDescription',
		'cTitleTag',
		'cMetaKeywords',
	];
	const COLUMN_TYPES = [
		'kKategorie' => 'int',
		'kSprache' => 'int',
		'kPlattform' => 'int',
		'kShop' => 'int',
		'cName' => 'varchar',
		'cBeschreibung' => 'varchar',
		'cUrlPfad' => 'varchar',
		'cMetaDescription' => 'varchar',
		'cTitleTag' => 'varchar',
		'cMetaKeywords' => 'varchar',
	];

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var string cUrlPfad */
	public $cUrlPfad;

	/** @var string cMetaDescription */
	public $cMetaDescription;

	/** @var string cTitleTag */
	public $cTitleTag;

	/** @var string cMetaKeywords */
	public $cMetaKeywords;
}
