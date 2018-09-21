<?php

namespace App\Schema;

class tland
{
	const TABLE_NAME = 'tland';
	const cISO = 'cISO';
	const cName = 'cName';
	const cNameEng = 'cNameEng';
	const nEU = 'nEU';
	const cKontinent = 'cKontinent';
	const cNameFra = 'cNameFra';
	const cISO3 = 'cISO3';
	const nISONumeric = 'nISONumeric';
	const cWaehrung = 'cWaehrung';
	const cDefaultCulture = 'cDefaultCulture';
	const COLUMN_NAMES = [
		'cISO',
		'cName',
		'cNameEng',
		'nEU',
		'cKontinent',
		'cNameFra',
		'cISO3',
		'nISONumeric',
		'cWaehrung',
		'cDefaultCulture',
	];
	const COLUMN_TYPES = [
		'cISO' => 'varchar',
		'cName' => 'varchar',
		'cNameEng' => 'varchar',
		'nEU' => 'tinyint',
		'cKontinent' => 'varchar',
		'cNameFra' => 'varchar',
		'cISO3' => 'varchar',
		'nISONumeric' => 'int',
		'cWaehrung' => 'char',
		'cDefaultCulture' => 'varchar',
	];

	/** @var string cISO */
	public $cISO;

	/** @var string cName */
	public $cName;

	/** @var string cNameEng */
	public $cNameEng;

	/** @var int nEU */
	public $nEU;

	/** @var string cKontinent */
	public $cKontinent;

	/** @var string cNameFra */
	public $cNameFra;

	/** @var string cISO3 */
	public $cISO3;

	/** @var int nISONumeric */
	public $nISONumeric;

	/** @var string cWaehrung */
	public $cWaehrung;

	/** @var string cDefaultCulture */
	public $cDefaultCulture;
}
