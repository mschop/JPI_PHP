<?php

namespace App\Db\Schema;

class tMerkmalGruppeMerkmal
{
	const TABLE_NAME = 'tMerkmalGruppeMerkmal';
	const kMerkmalGruppe = 'kMerkmalGruppe';
	const kMerkmal = 'kMerkmal';
	const COLUMN_NAMES = ['kMerkmalGruppe', 'kMerkmal'];
	const COLUMN_DEFINITIONS = [
		'kMerkmalGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMerkmal' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMerkmalGruppe */
	public $kMerkmalGruppe;

	/** @var int kMerkmal */
	public $kMerkmal;
}
