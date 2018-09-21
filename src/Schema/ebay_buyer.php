<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kBuyer' => 'int',
		'AboutMePage' => 'tinyint',
		'CityName' => 'varchar',
		'Country' => 'varchar',
		'CountryName' => 'varchar',
		'Name' => 'varchar',
		'PostalCode' => 'varchar',
		'Street' => 'varchar',
		'Street1' => 'varchar',
		'Street2' => 'varchar',
		'Phone' => 'varchar',
		'SA_CityName' => 'varchar',
		'SA_Country' => 'varchar',
		'SA_CountryName' => 'varchar',
		'SA_ExternalAddressID' => 'varchar',
		'SA_Name' => 'varchar',
		'SA_PostalCode' => 'varchar',
		'SA_StateOrProvince' => 'varchar',
		'SA_Street' => 'varchar',
		'SA_Street1' => 'varchar',
		'SA_Street2' => 'varchar',
		'SA_Phone' => 'varchar',
		'CharityID' => 'varchar',
		'eBayGoodStanding' => 'tinyint',
		'EIASToken' => 'varchar',
		'Email' => 'varchar',
		'FeedbackPrivate' => 'tinyint',
		'FeedbackRatingStar' => 'varchar',
		'FeedbackScore' => 'int',
		'IDVerified' => 'tinyint',
		'NewUser' => 'tinyint',
		'PositiveFeedbackPercent' => 'decimal',
		'RegistrationDate' => 'varchar',
		'Site' => 'varchar',
		'SiteVerified' => 'tinyint',
		'Status' => 'varchar',
		'UserID' => 'varchar',
		'UserIDChanged' => 'tinyint',
		'UserIDLastChanged' => 'varchar',
		'VATStatus' => 'varchar',
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
