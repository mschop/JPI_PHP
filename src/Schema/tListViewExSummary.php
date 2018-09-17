<?php

namespace App\Schema;

class tListViewExSummary
{
	const TABLE_NAME = 'tListViewExSummary';
	const kListViewExSummary = 'kListViewExSummary';
	const kBenutzer = 'kBenutzer';
	const kBenutzerAdmin = 'kBenutzerAdmin';
	const nListViewID = 'nListViewID';
	const nSummaryID = 'nSummaryID';
	const cRechnername = 'cRechnername';

	/** @var int kListViewExSummary */
	public $kListViewExSummary;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kBenutzerAdmin */
	public $kBenutzerAdmin;

	/** @var int nListViewID */
	public $nListViewID;

	/** @var int nSummaryID */
	public $nSummaryID;

	/** @var string cRechnername */
	public $cRechnername;
}
