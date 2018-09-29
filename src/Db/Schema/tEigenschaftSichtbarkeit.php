<?php

namespace App\Db\Schema;

class tEigenschaftSichtbarkeit
{
	const TABLE_NAME = 'tEigenschaftSichtbarkeit';
	const kEigenschaft = 'kEigenschaft';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kEigenschaft', 'kKundenGruppe', 'kShop'];
	const COLUMN_DEFINITIONS = [
		'kEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;
}
