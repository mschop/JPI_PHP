<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kPlanung' => 'int',
		'kItem' => 'int',
		'kEbayUser' => 'int',
		'cPlanungsname' => 'varchar',
		'cMo' => 'tinyint',
		'cDi' => 'tinyint',
		'cMi' => 'tinyint',
		'cDo' => 'tinyint',
		'cFr' => 'tinyint',
		'cSa' => 'tinyint',
		'cSo' => 'tinyint',
		'cZeit1' => 'varchar',
		'cZeit2' => 'varchar',
		'cZeit3' => 'varchar',
		'cZeit4' => 'varchar',
		'cZeit5' => 'varchar',
		'cZeit6' => 'varchar',
		'dPlanungsbeginn' => 'datetime',
		'dPlanungsende' => 'datetime',
		'cStatus' => 'char',
		'nAlleXtage' => 'int',
		'cAlleXuhrzeit' => 'varchar',
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
