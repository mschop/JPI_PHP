<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kEbayuser' => 'int',
		'Login' => 'varchar',
		'Passwort' => 'varchar',
		'SiteId' => 'int',
		'Name' => 'varchar',
		'Umgebung' => 'varchar',
		'kFirma' => 'int',
		'nSonderRegel' => 'tinyint',
		'nEbayPayment' => 'tinyint',
		'nOutOfStockControl' => 'tinyint',
		'dLetzterBestellabgleich' => 'datetime',
		'cEbayUsername' => 'varchar',
		'dLetzerEbayAbgleich' => 'datetime',
		'nLagerbestaendeAendern' => 'tinyint',
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
