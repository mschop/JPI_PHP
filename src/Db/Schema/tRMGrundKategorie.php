<?php

namespace App\Db\Schema;

class tRMGrundKategorie
{
	const TABLE_NAME = 'tRMGrundKategorie';
	const kRMGrundKategorie = 'kRMGrundKategorie';
	const kRMGrund = 'kRMGrund';
	const kKategorie = 'kKategorie';
	const nIstMarkiert = 'nIstMarkiert';
	const COLUMN_NAMES = ['kRMGrundKategorie', 'kRMGrund', 'kKategorie', 'nIstMarkiert'];
	const COLUMN_DEFINITIONS = [
		'kRMGrundKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMGrund' => [
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

	/** @var int kRMGrundKategorie */
	public $kRMGrundKategorie;

	/** @var int kRMGrund */
	public $kRMGrund;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int nIstMarkiert */
	public $nIstMarkiert;
}
