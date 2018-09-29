<?php

namespace App\Db\Schema;

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
		'nHeaderID' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSize' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nOrderBy' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cOriginalName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCustomName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kBenutzerAdmin' => [
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
