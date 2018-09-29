<?php

namespace App\Db\Schema;

class tRMGrundWarengruppe
{
	const TABLE_NAME = 'tRMGrundWarengruppe';
	const kRMGrundWarengruppe = 'kRMGrundWarengruppe';
	const kRMGrund = 'kRMGrund';
	const kWarengruppe = 'kWarengruppe';
	const COLUMN_NAMES = ['kRMGrundWarengruppe', 'kRMGrund', 'kWarengruppe'];
	const COLUMN_DEFINITIONS = [
		'kRMGrundWarengruppe' => [
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
		'kWarengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRMGrundWarengruppe */
	public $kRMGrundWarengruppe;

	/** @var int kRMGrund */
	public $kRMGrund;

	/** @var int kWarengruppe */
	public $kWarengruppe;
}
