<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kListViewExHeader' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzerAdmin' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nListViewID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nHeaderID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSize' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nOrderBy' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cOriginalName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
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
		'nRoundStellen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
