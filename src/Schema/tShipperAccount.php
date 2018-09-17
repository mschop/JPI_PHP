<?php

namespace App\Schema;

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
