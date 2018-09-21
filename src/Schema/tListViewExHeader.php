<?php

namespace App\Schema;

class tListViewExHeader
{
	const TABLE_NAME = 'tListViewExHeader';
	const kListViewExHeader = 'kListViewExHeader';
	const kBenutzer = 'kBenutzer';
	const kBenutzerAdmin = 'kBenutzerAdmin';
	const nListViewID = 'nListViewID';
	const cRechnername = 'cRechnername';
	const nHeaderID = 'nHeaderID';
	const nSize = 'nSize';
	const nSort = 'nSort';
	const nOrderBy = 'nOrderBy';
	const cOriginalName = 'cOriginalName';
	const cCustomName = 'cCustomName';
	const nRoundStellen = 'nRoundStellen';
	const COLUMN_NAMES = [
		'kListViewExHeader',
		'kBenutzer',
		'kBenutzerAdmin',
		'nListViewID',
		'cRechnername',
		'nHeaderID',
		'nSize',
		'nSort',
		'nOrderBy',
		'cOriginalName',
		'cCustomName',
		'nRoundStellen',
	];
	const COLUMN_TYPES = [
		'kListViewExHeader' => 'int',
		'kBenutzer' => 'int',
		'kBenutzerAdmin' => 'int',
		'nListViewID' => 'int',
		'cRechnername' => 'varchar',
		'nHeaderID' => 'int',
		'nSize' => 'int',
		'nSort' => 'int',
		'nOrderBy' => 'int',
		'cOriginalName' => 'varchar',
		'cCustomName' => 'varchar',
		'nRoundStellen' => 'tinyint',
	];

	/** @var int kListViewExHeader */
	public $kListViewExHeader;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kBenutzerAdmin */
	public $kBenutzerAdmin;

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

	/** @var int nRoundStellen */
	public $nRoundStellen;
}
