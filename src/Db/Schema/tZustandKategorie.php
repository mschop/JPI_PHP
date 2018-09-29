<?php

namespace App\Db\Schema;

class tZustandKategorie
{
	const TABLE_NAME = 'tZustandKategorie';
	const kZustandKategorie = 'kZustandKategorie';
	const kZustand = 'kZustand';
	const kKategorie = 'kKategorie';
	const nIstMarkiert = 'nIstMarkiert';
	const COLUMN_NAMES = ['kZustandKategorie', 'kZustand', 'kKategorie', 'nIstMarkiert'];
	const COLUMN_DEFINITIONS = [
		'kZustandKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZustand' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstMarkiert' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kZustandKategorie */
	public $kZustandKategorie;

	/** @var int kZustand */
	public $kZustand;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int nIstMarkiert */
	public $nIstMarkiert;
}
