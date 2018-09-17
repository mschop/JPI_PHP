<?php

namespace App\Schema;

class tWorkflowBedingung
{
	const TABLE_NAME = 'tWorkflowBedingung';
	const kWorkflowBedingung = 'kWorkflowBedingung';
	const kWorkflow = 'kWorkflow';
	const cEigenschaft = 'cEigenschaft';
	const nOperator = 'nOperator';
	const cVergleichswert = 'cVergleichswert';
	const kWorkflowEigenschaft = 'kWorkflowEigenschaft';

	/** @var int kWorkflowBedingung */
	public $kWorkflowBedingung;

	/** @var int kWorkflow */
	public $kWorkflow;

	/** @var resource cEigenschaft */
	public $cEigenschaft;

	/** @var int nOperator */
	public $nOperator;

	/** @var string cVergleichswert */
	public $cVergleichswert;

	/** @var int kWorkflowEigenschaft */
	public $kWorkflowEigenschaft;
}
