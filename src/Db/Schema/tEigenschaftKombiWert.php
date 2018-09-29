<?php

namespace App\Db\Schema;

class tEigenschaftKombiWert
{
	const TABLE_NAME = 'tEigenschaftKombiWert';
	const kEigenschaftKombi = 'kEigenschaftKombi';
	const kEigenschaft = 'kEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const COLUMN_NAMES = ['kEigenschaftKombi', 'kEigenschaft', 'kEigenschaftWert'];
	const COLUMN_DEFINITIONS = [
		'kEigenschaftKombi' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaftWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEigenschaftKombi */
	public $kEigenschaftKombi;

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;
}
