<?php

namespace App\Db\Schema;

class ebay_userprofile
{
	const TABLE_NAME = 'ebay_userprofile';
	const kUserProfile = 'kUserProfile';
	const kEbayuser = 'kEbayuser';
	const SiteID = 'SiteID';
	const ProfileType = 'ProfileType';
	const ProfileID = 'ProfileID';
	const ProfileName = 'ProfileName';
	const ProfileDesc = 'ProfileDesc';
	const CategoryName = 'CategoryName';
	const nStandard = 'nStandard';
	const COLUMN_NAMES = [
		'kUserProfile',
		'kEbayuser',
		'SiteID',
		'ProfileType',
		'ProfileID',
		'ProfileName',
		'ProfileDesc',
		'CategoryName',
		'nStandard',
	];
	const COLUMN_DEFINITIONS = [
		'kUserProfile' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayuser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'SiteID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ProfileType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'ProfileID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ProfileName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ProfileDesc' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'CategoryName' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kUserProfile */
	public $kUserProfile;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var int SiteID */
	public $SiteID;

	/** @var string ProfileType */
	public $ProfileType;

	/** @var string ProfileID */
	public $ProfileID;

	/** @var string ProfileName */
	public $ProfileName;

	/** @var string ProfileDesc */
	public $ProfileDesc;

	/** @var string CategoryName */
	public $CategoryName;

	/** @var int nStandard */
	public $nStandard;
}
