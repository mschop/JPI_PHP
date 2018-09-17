<?php

namespace App\Schema;

class tWorkflowLog
{
	const TABLE_NAME = 'tWorkflowLog';
	const kWorkflowLog = 'kWorkflowLog';
	const kObjektPk = 'kObjektPk';
	const kWorkflowAktion = 'kWorkflowAktion';
	const dDatum = 'dDatum';
	const cArbeitsplatz = 'cArbeitsplatz';
	const kBenutzer = 'kBenutzer';
	const nTyp = 'nTyp';
	const cLog = 'cLog';
	const kWorkflow = 'kWorkflow';
	const nUnique = 'nUnique';
	const cObjectId = 'cObjectId';

	/** @var int kWorkflowLog */
	public $kWorkflowLog;

	/** @var int kObjektPk */
	public $kObjektPk;

	/** @var int kWorkflowAktion */
	public $kWorkflowAktion;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cArbeitsplatz */
	public $cArbeitsplatz;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cLog */
	public $cLog;

	/** @var int kWorkflow */
	public $kWorkflow;

	/** @var int nUnique */
	public $nUnique;

	/** @var string cObjectId */
	public $cObjectId;
}
