<?php

namespace App\Db\Schema;

class ebay_buyer
{
	const TABLE_NAME = 'ebay_buyer';
	const kBuyer = 'kBuyer';
	const AboutMePage = 'AboutMePage';
	const CityName = 'CityName';
	const Country = 'Country';
	const CountryName = 'CountryName';
	const Name = 'Name';
	const PostalCode = 'PostalCode';
	const Street = 'Street';
	const Street1 = 'Street1';
	const Street2 = 'Street2';
	const Phone = 'Phone';
	const SA_CityName = 'SA_CityName';
	const SA_Country = 'SA_Country';
	const SA_CountryName = 'SA_CountryName';
	const SA_ExternalAddressID = 'SA_ExternalAddressID';
	const SA_Name = 'SA_Name';
	const SA_PostalCode = 'SA_PostalCode';
	const SA_StateOrProvince = 'SA_StateOrProvince';
	const SA_Street = 'SA_Street';
	const SA_Street1 = 'SA_Street1';
	const SA_Street2 = 'SA_Street2';
	const SA_Phone = 'SA_Phone';
	const CharityID = 'CharityID';
	const eBayGoodStanding = 'eBayGoodStanding';
	const EIASToken = 'EIASToken';
	const Email = 'Email';
	const FeedbackPrivate = 'FeedbackPrivate';
	const FeedbackRatingStar = 'FeedbackRatingStar';
	const FeedbackScore = 'FeedbackScore';
	const IDVerified = 'IDVerified';
	const NewUser = 'NewUser';
	const PositiveFeedbackPercent = 'PositiveFeedbackPercent';
	const RegistrationDate = 'RegistrationDate';
	const Site = 'Site';
	const SiteVerified = 'SiteVerified';
	const Status = 'Status';
	const UserID = 'UserID';
	const UserIDChanged = 'UserIDChanged';
	const UserIDLastChanged = 'UserIDLastChanged';
	const VATStatus = 'VATStatus';
	const COLUMN_NAMES = [
		'kBuyer',
		'AboutMePage',
		'CityName',
		'Country',
		'CountryName',
		'Name',
		'PostalCode',
		'Street',
		'Street1',
		'Street2',
		'Phone',
		'SA_CityName',
		'SA_Country',
		'SA_CountryName',
		'SA_ExternalAddressID',
		'SA_Name',
		'SA_PostalCode',
		'SA_StateOrProvince',
		'SA_Street',
		'SA_Street1',
		'SA_Street2',
		'SA_Phone',
		'CharityID',
		'eBayGoodStanding',
		'EIASToken',
		'Email',
		'FeedbackPrivate',
		'FeedbackRatingStar',
		'FeedbackScore',
		'IDVerified',
		'NewUser',
		'PositiveFeedbackPercent',
		'RegistrationDate',
		'Site',
		'SiteVerified',
		'Status',
		'UserID',
		'UserIDChanged',
		'UserIDLastChanged',
		'VATStatus',
	];
	const COLUMN_DEFINITIONS = [
		'kBuyer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AboutMePage' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CityName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'Country' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'CountryName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Name' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'PostalCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'Street' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Street1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Street2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Phone' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'SA_CityName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'SA_Country' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SA_CountryName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SA_ExternalAddressID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SA_Name' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SA_PostalCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'SA_StateOrProvince' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'SA_Street' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SA_Street1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SA_Street2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SA_Phone' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'CharityID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'eBayGoodStanding' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'EIASToken' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Email' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FeedbackPrivate' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'FeedbackRatingStar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'FeedbackScore' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'IDVerified' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'NewUser' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'PositiveFeedbackPercent' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'RegistrationDate' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'Site' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'SiteVerified' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Status' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'UserID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'UserIDChanged' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'UserIDLastChanged' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'VATStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBuyer */
	public $kBuyer;

	/** @var int AboutMePage */
	public $AboutMePage;

	/** @var string CityName */
	public $CityName;

	/** @var string Country */
	public $Country;

	/** @var string CountryName */
	public $CountryName;

	/** @var string Name */
	public $Name;

	/** @var string PostalCode */
	public $PostalCode;

	/** @var string Street */
	public $Street;

	/** @var string Street1 */
	public $Street1;

	/** @var string Street2 */
	public $Street2;

	/** @var string Phone */
	public $Phone;

	/** @var string SA_CityName */
	public $SA_CityName;

	/** @var string SA_Country */
	public $SA_Country;

	/** @var string SA_CountryName */
	public $SA_CountryName;

	/** @var string SA_ExternalAddressID */
	public $SA_ExternalAddressID;

	/** @var string SA_Name */
	public $SA_Name;

	/** @var string SA_PostalCode */
	public $SA_PostalCode;

	/** @var string SA_StateOrProvince */
	public $SA_StateOrProvince;

	/** @var string SA_Street */
	public $SA_Street;

	/** @var string SA_Street1 */
	public $SA_Street1;

	/** @var string SA_Street2 */
	public $SA_Street2;

	/** @var string SA_Phone */
	public $SA_Phone;

	/** @var string CharityID */
	public $CharityID;

	/** @var int eBayGoodStanding */
	public $eBayGoodStanding;

	/** @var string EIASToken */
	public $EIASToken;

	/** @var string Email */
	public $Email;

	/** @var int FeedbackPrivate */
	public $FeedbackPrivate;

	/** @var string FeedbackRatingStar */
	public $FeedbackRatingStar;

	/** @var int FeedbackScore */
	public $FeedbackScore;

	/** @var int IDVerified */
	public $IDVerified;

	/** @var int NewUser */
	public $NewUser;

	/** @var string PositiveFeedbackPercent */
	public $PositiveFeedbackPercent;

	/** @var string RegistrationDate */
	public $RegistrationDate;

	/** @var string Site */
	public $Site;

	/** @var int SiteVerified */
	public $SiteVerified;

	/** @var string Status */
	public $Status;

	/** @var string UserID */
	public $UserID;

	/** @var int UserIDChanged */
	public $UserIDChanged;

	/** @var string UserIDLastChanged */
	public $UserIDLastChanged;

	/** @var string VATStatus */
	public $VATStatus;
}
