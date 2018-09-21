<?php

namespace App\Schema;

class tSpracheUsed
{
	const TABLE_NAME = 'tSpracheUsed';
	const kSprache = 'kSprache';
	const cNameEng = 'cNameEng';
	const cNameDeu = 'cNameDeu';
	const cISO = 'cISO';
	const nStandard = 'nStandard';
	const cKultur = 'cKultur';
	const cISO2 = 'cISO2';
	const COLUMN_NAMES = ['kSprache', 'cNameEng', 'cNameDeu', 'cISO', 'nStandard', 'cKultur', 'cISO2'];
	const COLUMN_TYPES = [
		'kSprache' => 'int',
		'cNameEng' => 'varchar',
		'cNameDeu' => 'varchar',
		'cISO' => 'varchar',
		'nStandard' => 'tinyint',
		'cKultur' => 'nchar',
		'cISO2' => 'char',
	];

	/** @var int kSprache */
	public $kSprache;

	/** @var string cNameEng */
	public $cNameEng;

	/** @var string cNameDeu */
	public $cNameDeu;

	/** @var string cISO */
	public $cISO;

	/** @var int nStandard */
	public $nStandard;

	/** @var resource cKultur */
	public $cKultur;

	/** @var string cISO2 */
	public $cISO2;
}
