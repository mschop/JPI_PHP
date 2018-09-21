<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kRMGrund' => 'int',
		'nAktiv' => 'tinyint',
		'cColor' => 'varchar',
		'nEinschraenkung' => 'tinyint',
		'nWmsVisible' => 'tinyint',
		'nSort' => 'int',
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
