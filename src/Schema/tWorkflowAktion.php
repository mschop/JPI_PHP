<?php

namespace App\Schema;

class tWorkflowAktion
{
	const TABLE_NAME = 'tWorkflowAktion';
	const kWorkflowAktion = 'kWorkflowAktion';
	const kWorkflow = 'kWorkflow';
	const xXmlObjekt = 'xXmlObjekt';
	const nPos = 'nPos';
	const cName = 'cName';

	/** @var int kWorkflowAktion */
	public $kWorkflowAktion;

	/** @var int kWorkflow */
	public $kWorkflow;

	/** @var resource xXmlObjekt */
	public $xXmlObjekt;

	/** @var int nPos */
	public $nPos;

	/** @var string cName */
	public $cName;
}
