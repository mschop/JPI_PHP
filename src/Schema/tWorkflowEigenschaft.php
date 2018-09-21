<?php

namespace App\Schema;

class tWorkflowEigenschaft
{
	const TABLE_NAME = 'tWorkflowEigenschaft';
	const kWorkflowEigenschaft = 'kWorkflowEigenschaft';
	const cDotLiquid = 'cDotLiquid';
	const cName = 'cName';
	const nObjekt = 'nObjekt';
	const nDatenTyp = 'nDatenTyp';
	const COLUMN_NAMES = ['kWorkflowEigenschaft', 'cDotLiquid', 'cName', 'nObjekt', 'nDatenTyp'];
	const COLUMN_TYPES = [
		'kWorkflowEigenschaft' => 'int',
		'cDotLiquid' => 'varchar',
		'cName' => 'varchar',
		'nObjekt' => 'int',
		'nDatenTyp' => 'tinyint',
	];

	/** @var int kWorkflowEigenschaft */
	public $kWorkflowEigenschaft;

	/** @var string cDotLiquid */
	public $cDotLiquid;

	/** @var string cName */
	public $cName;

	/** @var int nObjekt */
	public $nObjekt;

	/** @var int nDatenTyp */
	public $nDatenTyp;
}
