<?php

namespace App\Schema;

class tMerkmalGruppe
{
	const TABLE_NAME = 'tMerkmalGruppe';
	const kMerkmalGruppe = 'kMerkmalGruppe';
	const cName = 'cName';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kMerkmalGruppe', 'cName', 'nSort'];
	const COLUMN_TYPES = ['kMerkmalGruppe' => 'int', 'cName' => 'varchar', 'nSort' => 'int'];

	/** @var int kMerkmalGruppe */
	public $kMerkmalGruppe;

	/** @var string cName */
	public $cName;

	/** @var int nSort */
	public $nSort;
}
