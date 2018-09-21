<?php

namespace App\Schema;

class pf_LVSummary
{
	const TABLE_NAME = 'pf_LVSummary';
	const kBenutzer = 'kBenutzer';
	const nListViewID = 'nListViewID';
	const cRechnername = 'cRechnername';
	const nSummaryID = 'nSummaryID';
	const COLUMN_NAMES = ['kBenutzer', 'nListViewID', 'cRechnername', 'nSummaryID'];
	const COLUMN_TYPES = ['kBenutzer' => 'int', 'nListViewID' => 'int', 'cRechnername' => 'varchar', 'nSummaryID' => 'int'];

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nListViewID */
	public $nListViewID;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int nSummaryID */
	public $nSummaryID;
}
