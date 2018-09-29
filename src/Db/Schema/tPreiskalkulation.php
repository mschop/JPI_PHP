<?php

namespace App\Db\Schema;

class tPreiskalkulation
{
	const TABLE_NAME = 'tPreiskalkulation';
	const cName = 'cName';
	const nAB = 'nAB';
	const nOperator = 'nOperator';
	const nWert = 'nWert';
	const dModifiziert = 'dModifiziert';
	const cPlattform = 'cPlattform';
	const nPreisglaettungBis10 = 'nPreisglaettungBis10';
	const nPreisglaettungBis100 = 'nPreisglaettungBis100';
	const nPreisglaettungBis1000 = 'nPreisglaettungBis1000';
	const nPReisglaettungBis10000 = 'nPReisglaettungBis10000';
	const bSonderpreisAb = 'bSonderpreisAb';
	const dSonderpreisAb = 'dSonderpreisAb';
	const bSonderpreisBis = 'bSonderpreisBis';
	const dSonderpreisBis = 'dSonderpreisBis';
	const bSonderpreiLager = 'bSonderpreiLager';
	const nSonderpreisLager = 'nSonderpreisLager';
	const cSonderpreisPlattform = 'cSonderpreisPlattform';
	const nIndexPreisAlt = 'nIndexPreisAlt';
	const nIndexPreisAltKundengruppe = 'nIndexPreisAltKundengruppe';
	const nIndexPreisAltMarktplatz = 'nIndexPreisAltMarktplatz';
	const nIndexPreisNeu = 'nIndexPreisNeu';
	const nIndexPreisNeuKundengruppe = 'nIndexPreisNeuKundengruppe';
	const nIndexPreisNeuMarktplatz = 'nIndexPreisNeuMarktplatz';
	const cSonderpreisKundengruppe = 'cSonderpreisKundengruppe';
	const nDelete = 'nDelete';
	const nDeaktivate = 'nDeaktivate';
	const COLUMN_NAMES = [
		'cName',
		'nAB',
		'nOperator',
		'nWert',
		'dModifiziert',
		'cPlattform',
		'nPreisglaettungBis10',
		'nPreisglaettungBis100',
		'nPreisglaettungBis1000',
		'nPReisglaettungBis10000',
		'bSonderpreisAb',
		'dSonderpreisAb',
		'bSonderpreisBis',
		'dSonderpreisBis',
		'bSonderpreiLager',
		'nSonderpreisLager',
		'cSonderpreisPlattform',
		'nIndexPreisAlt',
		'nIndexPreisAltKundengruppe',
		'nIndexPreisAltMarktplatz',
		'nIndexPreisNeu',
		'nIndexPreisNeuKundengruppe',
		'nIndexPreisNeuMarktplatz',
		'cSonderpreisKundengruppe',
		'nDelete',
		'nDeaktivate',
	];
	const COLUMN_DEFINITIONS = [
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nAB' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nOperator' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nWert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dModifiziert' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPlattform' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPreisglaettungBis10' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPreisglaettungBis100' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPreisglaettungBis1000' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPReisglaettungBis10000' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bSonderpreisAb' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dSonderpreisAb' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bSonderpreisBis' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dSonderpreisBis' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bSonderpreiLager' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSonderpreisLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSonderpreisPlattform' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nIndexPreisAlt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIndexPreisAltKundengruppe' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIndexPreisAltMarktplatz' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIndexPreisNeu' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIndexPreisNeuKundengruppe' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIndexPreisNeuMarktplatz' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSonderpreisKundengruppe' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nDelete' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDeaktivate' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cName */
	public $cName;

	/** @var int nAB */
	public $nAB;

	/** @var int nOperator */
	public $nOperator;

	/** @var string nWert */
	public $nWert;

	/** @var string dModifiziert */
	public $dModifiziert;

	/** @var string cPlattform */
	public $cPlattform;

	/** @var int nPreisglaettungBis10 */
	public $nPreisglaettungBis10;

	/** @var int nPreisglaettungBis100 */
	public $nPreisglaettungBis100;

	/** @var int nPreisglaettungBis1000 */
	public $nPreisglaettungBis1000;

	/** @var int nPReisglaettungBis10000 */
	public $nPReisglaettungBis10000;

	/** @var int bSonderpreisAb */
	public $bSonderpreisAb;

	/** @var string dSonderpreisAb */
	public $dSonderpreisAb;

	/** @var int bSonderpreisBis */
	public $bSonderpreisBis;

	/** @var string dSonderpreisBis */
	public $dSonderpreisBis;

	/** @var int bSonderpreiLager */
	public $bSonderpreiLager;

	/** @var int nSonderpreisLager */
	public $nSonderpreisLager;

	/** @var string cSonderpreisPlattform */
	public $cSonderpreisPlattform;

	/** @var int nIndexPreisAlt */
	public $nIndexPreisAlt;

	/** @var int nIndexPreisAltKundengruppe */
	public $nIndexPreisAltKundengruppe;

	/** @var int nIndexPreisAltMarktplatz */
	public $nIndexPreisAltMarktplatz;

	/** @var int nIndexPreisNeu */
	public $nIndexPreisNeu;

	/** @var int nIndexPreisNeuKundengruppe */
	public $nIndexPreisNeuKundengruppe;

	/** @var int nIndexPreisNeuMarktplatz */
	public $nIndexPreisNeuMarktplatz;

	/** @var string cSonderpreisKundengruppe */
	public $cSonderpreisKundengruppe;

	/** @var int nDelete */
	public $nDelete;

	/** @var int nDeaktivate */
	public $nDeaktivate;
}
