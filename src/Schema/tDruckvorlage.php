<?php

namespace App\Schema;

class tDruckvorlage
{
	const TABLE_NAME = 'tDruckvorlage';
	const kDruckvorlage = 'kDruckvorlage';
	const kFirma = 'kFirma';
	const kSprache = 'kSprache';
	const kKundenGruppe = 'kKundenGruppe';
	const kLLVorlage = 'kLLVorlage';
	const cName = 'cName';
	const nStandard = 'nStandard';
	const kFormType = 'kFormType';
	const nAusgabe = 'nAusgabe';
	const COLUMN_NAMES = [
		'kDruckvorlage',
		'kFirma',
		'kSprache',
		'kKundenGruppe',
		'kLLVorlage',
		'cName',
		'nStandard',
		'kFormType',
		'nAusgabe',
	];
	const COLUMN_TYPES = [
		'kDruckvorlage' => 'int',
		'kFirma' => 'int',
		'kSprache' => 'int',
		'kKundenGruppe' => 'int',
		'kLLVorlage' => 'int',
		'cName' => 'varchar',
		'nStandard' => 'tinyint',
		'kFormType' => 'int',
		'nAusgabe' => 'tinyint',
	];

	/** @var int kDruckvorlage */
	public $kDruckvorlage;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kLLVorlage */
	public $kLLVorlage;

	/** @var string cName */
	public $cName;

	/** @var int nStandard */
	public $nStandard;

	/** @var int kFormType */
	public $kFormType;

	/** @var int nAusgabe */
	public $nAusgabe;
}
