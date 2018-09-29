<?php

namespace App\Db\Schema;

class tArtikelUploadSprache
{
	const TABLE_NAME = 'tArtikelUploadSprache';
	const kArtikelUpload = 'kArtikelUpload';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = ['kArtikelUpload', 'kSprache', 'cName', 'cBeschreibung'];
	const COLUMN_DEFINITIONS = [
		'kArtikelUpload' => [
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
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kArtikelUpload */
	public $kArtikelUpload;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
