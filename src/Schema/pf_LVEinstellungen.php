<?php

namespace App\Schema;

class pf_LVEinstellungen
{
	const TABLE_NAME = 'pf_LVEinstellungen';
	const kBenutzer = 'kBenutzer';
	const nListViewID = 'nListViewID';
	const cRechnername = 'cRechnername';
	const nHeaderID = 'nHeaderID';
	const nSize = 'nSize';
	const nSort = 'nSort';
	const nOrderBy = 'nOrderBy';
	const cOriginalName = 'cOriginalName';
	const cCustomName = 'cCustomName';
	const kBenutzerAdmin = 'kBenutzerAdmin';
	const COLUMN_NAMES = [
		'kBenutzer',
		'nListViewID',
		'cRechnername',
		'nHeaderID',
		'nSize',
		'nSort',
		'nOrderBy',
		'cOriginalName',
		'cCustomName',
		'kBenutzerAdmin',
	];
	const COLUMN_TYPES = [
		'kBenutzer' => 'int',
		'nListViewID' => 'int',
		'cRechnername' => 'varchar',
		'nHeaderID' => 'tinyint',
		'nSize' => 'int',
		'nSort' => 'tinyint',
		'nOrderBy' => 'tinyint',
		'cOriginalName' => 'varchar',
		'cCustomName' => 'varchar',
		'kBenutzerAdmin' => 'int',
	];

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nListViewID */
	public $nListViewID;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int nHeaderID */
	public $nHeaderID;

	/** @var int nSize */
	public $nSize;

	/** @var int nSort */
	public $nSort;

	/** @var int nOrderBy */
	public $nOrderBy;

	/** @var string cOriginalName */
	public $cOriginalName;

	/** @var string cCustomName */
	public $cCustomName;

	/** @var int kBenutzerAdmin */
	public $kBenutzerAdmin;
}
