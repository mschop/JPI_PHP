<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
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
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cUrlPfad' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cMetaDescription' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4522,
			'characterSetName' => 'iso_1',
		],
		'cTitleTag' => [
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
