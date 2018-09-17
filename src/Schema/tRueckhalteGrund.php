<?php

namespace App\Schema;

class tRueckhalteGrund
{
	const TABLE_NAME = 'tRueckhalteGrund';
	const kRueckhalteGrund = 'kRueckhalteGrund';
	const cName = 'cName';
	const nZusammenfassbar = 'nZusammenfassbar';
	const nEinkaufslisteGesperrt = 'nEinkaufslisteGesperrt';

	/** @var int kRueckhalteGrund */
	public $kRueckhalteGrund;

	/** @var string cName */
	public $cName;

	/** @var int nZusammenfassbar */
	public $nZusammenfassbar;

	/** @var int nEinkaufslisteGesperrt */
	public $nEinkaufslisteGesperrt;
}
