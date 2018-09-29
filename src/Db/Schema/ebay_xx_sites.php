<?php

namespace App\Db\Schema;

class ebay_xx_sites
{
	const TABLE_NAME = 'ebay_xx_sites';
	const SiteID = 'SiteID';
	const cAbbreviation = 'cAbbreviation';
	const cName = 'cName';
	const cSiteCodeType = 'cSiteCodeType';
	const cSprachISO = 'cSprachISO';
	const cLandISO = 'cLandISO';
	const dLastUpdate = 'dLastUpdate';
	const nVersion = 'nVersion';
	const www = 'www';
	const kPlattform = 'kPlattform';
	const cWaehrungISO = 'cWaehrungISO';
	const COLUMN_NAMES = [
		'SiteID',
		'cAbbreviation',
		'cName',
		'cSiteCodeType',
		'cSprachISO',
		'cLandISO',
		'dLastUpdate',
		'nVersion',
		'www',
		'kPlattform',
		'cWaehrungISO',
	];
	const COLUMN_DEFINITIONS = [
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAbbreviation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cSiteCodeType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cSprachISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cLandISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'dLastUpdate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersion' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'www' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWaehrungISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int SiteID */
	public $SiteID;

	/** @var string cAbbreviation */
	public $cAbbreviation;

	/** @var string cName */
	public $cName;

	/** @var string cSiteCodeType */
	public $cSiteCodeType;

	/** @var string cSprachISO */
	public $cSprachISO;

	/** @var string cLandISO */
	public $cLandISO;

	/** @var string dLastUpdate */
	public $dLastUpdate;

	/** @var int nVersion */
	public $nVersion;

	/** @var string www */
	public $www;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cWaehrungISO */
	public $cWaehrungISO;
}
