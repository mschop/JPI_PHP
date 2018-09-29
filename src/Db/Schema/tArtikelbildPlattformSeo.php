<?php

namespace App\Db\Schema;

class tArtikelbildPlattformSeo
{
	const TABLE_NAME = 'tArtikelbildPlattformSeo';
	const kArtikelbildPlattformSeo = 'kArtikelbildPlattformSeo';
	const kArtikelbildPlattform = 'kArtikelbildPlattform';
	const kSprache = 'kSprache';
	const cAlternativtext = 'cAlternativtext';
	const COLUMN_NAMES = ['kArtikelbildPlattformSeo', 'kArtikelbildPlattform', 'kSprache', 'cAlternativtext'];
	const COLUMN_DEFINITIONS = [
		'kArtikelbildPlattformSeo' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikelbildPlattform' => [
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
		'cAlternativtext' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kArtikelbildPlattformSeo */
	public $kArtikelbildPlattformSeo;

	/** @var int kArtikelbildPlattform */
	public $kArtikelbildPlattform;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cAlternativtext */
	public $cAlternativtext;
}
