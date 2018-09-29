<?php

namespace App\Db\Schema;

class tRueckhalteGrund
{
	const TABLE_NAME = 'tRueckhalteGrund';
	const kRueckhalteGrund = 'kRueckhalteGrund';
	const cName = 'cName';
	const nZusammenfassbar = 'nZusammenfassbar';
	const nEinkaufslisteGesperrt = 'nEinkaufslisteGesperrt';
	const COLUMN_NAMES = ['kRueckhalteGrund', 'cName', 'nZusammenfassbar', 'nEinkaufslisteGesperrt'];
	const COLUMN_DEFINITIONS = [
		'kRueckhalteGrund' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'nZusammenfassbar' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEinkaufslisteGesperrt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRueckhalteGrund */
	public $kRueckhalteGrund;

	/** @var string cName */
	public $cName;

	/** @var int nZusammenfassbar */
	public $nZusammenfassbar;

	/** @var int nEinkaufslisteGesperrt */
	public $nEinkaufslisteGesperrt;
}
