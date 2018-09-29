<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kDruckvorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLLVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormType' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAusgabe' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
