<?php

namespace App\Schema;

class tMerkmalGruppeMerkmal
{
	const TABLE_NAME = 'tMerkmalGruppeMerkmal';
	const kMerkmalGruppe = 'kMerkmalGruppe';
	const kMerkmal = 'kMerkmal';
	const COLUMN_NAMES = ['kMerkmalGruppe', 'kMerkmal'];
	const COLUMN_TYPES = ['kMerkmalGruppe' => 'int', 'kMerkmal' => 'int'];

	/** @var int kMerkmalGruppe */
	public $kMerkmalGruppe;

	/** @var int kMerkmal */
	public $kMerkmal;
}
