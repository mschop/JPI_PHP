<?php

namespace App\Db\Schema;

class pf_LVSummary
{
	const TABLE_NAME = 'pf_LVSummary';
	const kBenutzer = 'kBenutzer';
	const nListViewID = 'nListViewID';
	const cRechnername = 'cRechnername';
	const nSummaryID = 'nSummaryID';
	const COLUMN_NAMES = ['kBenutzer', 'nListViewID', 'cRechnername', 'nSummaryID'];
	const COLUMN_DEFINITIONS = [
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nListViewID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSummaryID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nListViewID */
	public $nListViewID;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int nSummaryID */
	public $nSummaryID;
}
