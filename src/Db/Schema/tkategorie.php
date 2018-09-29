<?php

namespace App\Db\Schema;

class tkategorie
{
	const TABLE_NAME = 'tkategorie';
	const kKategorie = 'kKategorie';
	const kOberKategorie = 'kOberKategorie';
	const cInet = 'cInet';
	const cAktiv = 'cAktiv';
	const cDelInet = 'cDelInet';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kKategorie', 'kOberKategorie', 'cInet', 'cAktiv', 'cDelInet', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kOberKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cDelInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
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
	];

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kOberKategorie */
	public $kOberKategorie;

	/** @var string cInet */
	public $cInet;

	/** @var string cAktiv */
	public $cAktiv;

	/** @var string cDelInet */
	public $cDelInet;

	/** @var int nSort */
	public $nSort;
}
