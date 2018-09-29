<?php

namespace App\Db\Schema;

class ebay_user
{
	const TABLE_NAME = 'ebay_user';
	const kEbayuser = 'kEbayuser';
	const Login = 'Login';
	const Passwort = 'Passwort';
	const SiteId = 'SiteId';
	const Name = 'Name';
	const Umgebung = 'Umgebung';
	const kFirma = 'kFirma';
	const nSonderRegel = 'nSonderRegel';
	const nEbayPayment = 'nEbayPayment';
	const nOutOfStockControl = 'nOutOfStockControl';
	const dLetzterBestellabgleich = 'dLetzterBestellabgleich';
	const cEbayUsername = 'cEbayUsername';
	const dLetzerEbayAbgleich = 'dLetzerEbayAbgleich';
	const nLagerbestaendeAendern = 'nLagerbestaendeAendern';
	const COLUMN_NAMES = [
		'kEbayuser',
		'Login',
		'Passwort',
		'SiteId',
		'Name',
		'Umgebung',
		'kFirma',
		'nSonderRegel',
		'nEbayPayment',
		'nOutOfStockControl',
		'dLetzterBestellabgleich',
		'cEbayUsername',
		'dLetzerEbayAbgleich',
		'nLagerbestaendeAendern',
	];
	const COLUMN_DEFINITIONS = [
		'kEbayuser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Login' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 40,
			'characterSetName' => 'iso_1',
		],
		'Passwort' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SiteId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Name' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 40,
			'characterSetName' => 'iso_1',
		],
		'Umgebung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSonderRegel' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEbayPayment' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nOutOfStockControl' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLetzterBestellabgleich' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cEbayUsername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'dLetzerEbayAbgleich' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLagerbestaendeAendern' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var string Login */
	public $Login;

	/** @var string Passwort */
	public $Passwort;

	/** @var int SiteId */
	public $SiteId;

	/** @var string Name */
	public $Name;

	/** @var string Umgebung */
	public $Umgebung;

	/** @var int kFirma */
	public $kFirma;

	/** @var int nSonderRegel */
	public $nSonderRegel;

	/** @var int nEbayPayment */
	public $nEbayPayment;

	/** @var int nOutOfStockControl */
	public $nOutOfStockControl;

	/** @var string dLetzterBestellabgleich */
	public $dLetzterBestellabgleich;

	/** @var string cEbayUsername */
	public $cEbayUsername;

	/** @var string dLetzerEbayAbgleich */
	public $dLetzerEbayAbgleich;

	/** @var int nLagerbestaendeAendern */
	public $nLagerbestaendeAendern;
}
