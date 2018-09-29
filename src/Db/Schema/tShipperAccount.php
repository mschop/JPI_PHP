<?php

namespace App\Db\Schema;

class tShipperAccount
{
	const TABLE_NAME = 'tShipperAccount';
	const kShipperAccount = 'kShipperAccount';
	const kShipperAccountParent = 'kShipperAccountParent';
	const cDisplayName = 'cDisplayName';
	const cUserName = 'cUserName';
	const cPassword = 'cPassword';
	const nVersanddienstleister = 'nVersanddienstleister';
	const nAddressSourceType = 'nAddressSourceType';
	const kFirma = 'kFirma';
	const cSalutation = 'cSalutation';
	const cTitle = 'cTitle';
	const cCompany = 'cCompany';
	const cCompanyAdd = 'cCompanyAdd';
	const cFirstname = 'cFirstname';
	const cLastname = 'cLastname';
	const cStreetname = 'cStreetname';
	const cStreetnumber = 'cStreetnumber';
	const cAddressadd = 'cAddressadd';
	const cCountry = 'cCountry';
	const cCountryIso = 'cCountryIso';
	const cMobil = 'cMobil';
	const cMail = 'cMail';
	const cZipCode = 'cZipCode';
	const cCity = 'cCity';
	const cBankName = 'cBankName';
	const cBankAccountOwner = 'cBankAccountOwner';
	const cIban = 'cIban';
	const cBic = 'cBic';
	const cEkp = 'cEkp';
	const cInternationalEkp = 'cInternationalEkp';
	const cShipperNumber = 'cShipperNumber';
	const cAccessLicenceNumber = 'cAccessLicenceNumber';
	const cPhone = 'cPhone';
	const nAccountType = 'nAccountType';
	const nTestAccount = 'nTestAccount';
	const fCodFee = 'fCodFee';
	const cRetourenEkp = 'cRetourenEkp';
	const cGlsCustomerId = 'cGlsCustomerId';
	const cGlsContactId = 'cGlsContactId';
	const COLUMN_NAMES = [
		'kShipperAccount',
		'kShipperAccountParent',
		'cDisplayName',
		'cUserName',
		'cPassword',
		'nVersanddienstleister',
		'nAddressSourceType',
		'kFirma',
		'cSalutation',
		'cTitle',
		'cCompany',
		'cCompanyAdd',
		'cFirstname',
		'cLastname',
		'cStreetname',
		'cStreetnumber',
		'cAddressadd',
		'cCountry',
		'cCountryIso',
		'cMobil',
		'cMail',
		'cZipCode',
		'cCity',
		'cBankName',
		'cBankAccountOwner',
		'cIban',
		'cBic',
		'cEkp',
		'cInternationalEkp',
		'cShipperNumber',
		'cAccessLicenceNumber',
		'cPhone',
		'nAccountType',
		'nTestAccount',
		'fCodFee',
		'cRetourenEkp',
		'cGlsCustomerId',
		'cGlsContactId',
	];
	const COLUMN_DEFINITIONS = [
		'kShipperAccount' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShipperAccountParent' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDisplayName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cUserName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPassword' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'nVersanddienstleister' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAddressSourceType' => [
			'type' => 'tinyint',
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
		'cSalutation' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cTitle' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cCompany' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
		'cCompanyAdd' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cFirstname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLastname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cStreetname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cStreetnumber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cAddressadd' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCountry' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCountryIso' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cMobil' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cMail' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cZipCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 25,
			'characterSetName' => 'iso_1',
		],
		'cCity' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBankName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBankAccountOwner' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cIban' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cBic' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cEkp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cInternationalEkp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cShipperNumber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cAccessLicenceNumber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cPhone' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'nAccountType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTestAccount' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fCodFee' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRetourenEkp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 14,
			'characterSetName' => 'iso_1',
		],
		'cGlsCustomerId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 25,
			'characterSetName' => 'iso_1',
		],
		'cGlsContactId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 25,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kShipperAccount */
	public $kShipperAccount;

	/** @var int kShipperAccountParent */
	public $kShipperAccountParent;

	/** @var string cDisplayName */
	public $cDisplayName;

	/** @var string cUserName */
	public $cUserName;

	/** @var string cPassword */
	public $cPassword;

	/** @var int nVersanddienstleister */
	public $nVersanddienstleister;

	/** @var int nAddressSourceType */
	public $nAddressSourceType;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cSalutation */
	public $cSalutation;

	/** @var string cTitle */
	public $cTitle;

	/** @var string cCompany */
	public $cCompany;

	/** @var string cCompanyAdd */
	public $cCompanyAdd;

	/** @var string cFirstname */
	public $cFirstname;

	/** @var string cLastname */
	public $cLastname;

	/** @var string cStreetname */
	public $cStreetname;

	/** @var string cStreetnumber */
	public $cStreetnumber;

	/** @var string cAddressadd */
	public $cAddressadd;

	/** @var string cCountry */
	public $cCountry;

	/** @var string cCountryIso */
	public $cCountryIso;

	/** @var string cMobil */
	public $cMobil;

	/** @var string cMail */
	public $cMail;

	/** @var string cZipCode */
	public $cZipCode;

	/** @var string cCity */
	public $cCity;

	/** @var string cBankName */
	public $cBankName;

	/** @var string cBankAccountOwner */
	public $cBankAccountOwner;

	/** @var string cIban */
	public $cIban;

	/** @var string cBic */
	public $cBic;

	/** @var string cEkp */
	public $cEkp;

	/** @var string cInternationalEkp */
	public $cInternationalEkp;

	/** @var string cShipperNumber */
	public $cShipperNumber;

	/** @var string cAccessLicenceNumber */
	public $cAccessLicenceNumber;

	/** @var string cPhone */
	public $cPhone;

	/** @var int nAccountType */
	public $nAccountType;

	/** @var int nTestAccount */
	public $nTestAccount;

	/** @var string fCodFee */
	public $fCodFee;

	/** @var string cRetourenEkp */
	public $cRetourenEkp;

	/** @var string cGlsCustomerId */
	public $cGlsCustomerId;

	/** @var string cGlsContactId */
	public $cGlsContactId;
}
