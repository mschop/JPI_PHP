<?php

namespace App\Db\Schema;

class tPreisImportVorlage
{
	const TABLE_NAME = 'tPreisImportVorlage';
	const kPreisImportVorlage = 'kPreisImportVorlage';
	const cName = 'cName';
	const bZeile = 'bZeile';
	const cTrennzeichen = 'cTrennzeichen';
	const kPlattform = 'kPlattform';
	const kKundengruppe = 'kKundengruppe';
	const nVKNettoberechnen = 'nVKNettoberechnen';
	const fFaktor = 'fFaktor';
	const nSTDVKNetto = 'nSTDVKNetto';
	const cIdent = 'cIdent';
	const kLieferant = 'kLieferant';
	const sMapping = 'sMapping';
	const COLUMN_NAMES = [
		'kPreisImportVorlage',
		'cName',
		'bZeile',
		'cTrennzeichen',
		'kPlattform',
		'kKundengruppe',
		'nVKNettoberechnen',
		'fFaktor',
		'nSTDVKNetto',
		'cIdent',
		'kLieferant',
		'sMapping',
	];
	const COLUMN_DEFINITIONS = [
		'kPreisImportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
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
		'bZeile' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTrennzeichen' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVKNettoberechnen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSTDVKNetto' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cIdent' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'sMapping' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 3000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kPreisImportVorlage */
	public $kPreisImportVorlage;

	/** @var string cName */
	public $cName;

	/** @var int bZeile */
	public $bZeile;

	/** @var string cTrennzeichen */
	public $cTrennzeichen;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var int nVKNettoberechnen */
	public $nVKNettoberechnen;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var int nSTDVKNetto */
	public $nSTDVKNetto;

	/** @var string cIdent */
	public $cIdent;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string sMapping */
	public $sMapping;
}
