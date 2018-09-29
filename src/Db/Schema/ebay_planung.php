<?php

namespace App\Db\Schema;

class ebay_planung
{
	const TABLE_NAME = 'ebay_planung';
	const kPlanung = 'kPlanung';
	const kItem = 'kItem';
	const kEbayUser = 'kEbayUser';
	const cPlanungsname = 'cPlanungsname';
	const cMo = 'cMo';
	const cDi = 'cDi';
	const cMi = 'cMi';
	const cDo = 'cDo';
	const cFr = 'cFr';
	const cSa = 'cSa';
	const cSo = 'cSo';
	const cZeit1 = 'cZeit1';
	const cZeit2 = 'cZeit2';
	const cZeit3 = 'cZeit3';
	const cZeit4 = 'cZeit4';
	const cZeit5 = 'cZeit5';
	const cZeit6 = 'cZeit6';
	const dPlanungsbeginn = 'dPlanungsbeginn';
	const dPlanungsende = 'dPlanungsende';
	const cStatus = 'cStatus';
	const nAlleXtage = 'nAlleXtage';
	const cAlleXuhrzeit = 'cAlleXuhrzeit';
	const COLUMN_NAMES = [
		'kPlanung',
		'kItem',
		'kEbayUser',
		'cPlanungsname',
		'cMo',
		'cDi',
		'cMi',
		'cDo',
		'cFr',
		'cSa',
		'cSo',
		'cZeit1',
		'cZeit2',
		'cZeit3',
		'cZeit4',
		'cZeit5',
		'cZeit6',
		'dPlanungsbeginn',
		'dPlanungsende',
		'cStatus',
		'nAlleXtage',
		'cAlleXuhrzeit',
	];
	const COLUMN_DEFINITIONS = [
		'kPlanung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPlanungsname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cMo' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDi' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMi' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDo' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFr' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSa' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSo' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cZeit1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cZeit2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cZeit3' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cZeit4' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cZeit5' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cZeit6' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'dPlanungsbeginn' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dPlanungsende' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStatus' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'nAlleXtage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAlleXuhrzeit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kPlanung */
	public $kPlanung;

	/** @var int kItem */
	public $kItem;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cPlanungsname */
	public $cPlanungsname;

	/** @var int cMo */
	public $cMo;

	/** @var int cDi */
	public $cDi;

	/** @var int cMi */
	public $cMi;

	/** @var int cDo */
	public $cDo;

	/** @var int cFr */
	public $cFr;

	/** @var int cSa */
	public $cSa;

	/** @var int cSo */
	public $cSo;

	/** @var string cZeit1 */
	public $cZeit1;

	/** @var string cZeit2 */
	public $cZeit2;

	/** @var string cZeit3 */
	public $cZeit3;

	/** @var string cZeit4 */
	public $cZeit4;

	/** @var string cZeit5 */
	public $cZeit5;

	/** @var string cZeit6 */
	public $cZeit6;

	/** @var string dPlanungsbeginn */
	public $dPlanungsbeginn;

	/** @var string dPlanungsende */
	public $dPlanungsende;

	/** @var string cStatus */
	public $cStatus;

	/** @var int nAlleXtage */
	public $nAlleXtage;

	/** @var string cAlleXuhrzeit */
	public $cAlleXuhrzeit;
}
