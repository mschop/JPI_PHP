<?php

namespace App\Db\Schema;

class tRMGrund
{
	const TABLE_NAME = 'tRMGrund';
	const kRMGrund = 'kRMGrund';
	const nAktiv = 'nAktiv';
	const cColor = 'cColor';
	const nEinschraenkung = 'nEinschraenkung';
	const nWmsVisible = 'nWmsVisible';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kRMGrund', 'nAktiv', 'cColor', 'nEinschraenkung', 'nWmsVisible', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kRMGrund' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cColor' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8,
			'characterSetName' => 'iso_1',
		],
		'nEinschraenkung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nWmsVisible' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRMGrund */
	public $kRMGrund;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var string cColor */
	public $cColor;

	/** @var int nEinschraenkung */
	public $nEinschraenkung;

	/** @var int nWmsVisible */
	public $nWmsVisible;

	/** @var int nSort */
	public $nSort;
}
