<?php

namespace App\Db\Schema;

class teigenschaft
{
	const TABLE_NAME = 'teigenschaft';
	const kEigenschaft = 'kEigenschaft';
	const kArtikel = 'kArtikel';
	const cWaehlbar = 'cWaehlbar';
	const nSort = 'nSort';
	const cTyp = 'cTyp';
	const cAktiv = 'cAktiv';
	const COLUMN_NAMES = ['kEigenschaft', 'kArtikel', 'cWaehlbar', 'nSort', 'cTyp', 'cAktiv'];
	const COLUMN_DEFINITIONS = [
		'kEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWaehlbar' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
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
		'cTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cWaehlbar */
	public $cWaehlbar;

	/** @var int nSort */
	public $nSort;

	/** @var string cTyp */
	public $cTyp;

	/** @var string cAktiv */
	public $cAktiv;
}
