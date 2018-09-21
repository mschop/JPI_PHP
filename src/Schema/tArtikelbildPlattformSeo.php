<?php

namespace App\Schema;

class tArtikelbildPlattformSeo
{
	const TABLE_NAME = 'tArtikelbildPlattformSeo';
	const kArtikelbildPlattformSeo = 'kArtikelbildPlattformSeo';
	const kArtikelbildPlattform = 'kArtikelbildPlattform';
	const kSprache = 'kSprache';
	const cAlternativtext = 'cAlternativtext';
	const COLUMN_NAMES = ['kArtikelbildPlattformSeo', 'kArtikelbildPlattform', 'kSprache', 'cAlternativtext'];
	const COLUMN_TYPES = [
		'kArtikelbildPlattformSeo' => 'int',
		'kArtikelbildPlattform' => 'int',
		'kSprache' => 'int',
		'cAlternativtext' => 'varchar',
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
