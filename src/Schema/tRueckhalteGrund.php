<?php

namespace App\Schema;

class tRueckhalteGrund
{
	const TABLE_NAME = 'tRueckhalteGrund';
	const kRueckhalteGrund = 'kRueckhalteGrund';
	const cName = 'cName';
	const nZusammenfassbar = 'nZusammenfassbar';
	const nEinkaufslisteGesperrt = 'nEinkaufslisteGesperrt';
	const COLUMN_NAMES = ['kRueckhalteGrund', 'cName', 'nZusammenfassbar', 'nEinkaufslisteGesperrt'];
	const COLUMN_TYPES = [
		'kRueckhalteGrund' => 'int',
		'cName' => 'varchar',
		'nZusammenfassbar' => 'tinyint',
		'nEinkaufslisteGesperrt' => 'tinyint',
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
