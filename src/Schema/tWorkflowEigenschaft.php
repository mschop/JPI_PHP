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
