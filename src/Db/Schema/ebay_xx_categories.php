<?php

namespace App\Db\Schema;

class ebay_xx_categories
{
	const TABLE_NAME = 'ebay_xx_categories';
	const SiteID = 'SiteID';
	const CategoryId = 'CategoryId';
	const CategoryParentId = 'CategoryParentId';
	const CategoryLevel = 'CategoryLevel';
	const CategoryName = 'CategoryName';
	const LeafCategory = 'LeafCategory';
	const VariationsEnabled = 'VariationsEnabled';
	const ConditionEnabled = 'ConditionEnabled';
	const ConditionValues = 'ConditionValues';
	const ItemSpecificsEnabled = 'ItemSpecificsEnabled';
	const AttributeConversionEnabled = 'AttributeConversionEnabled';
	const ItemCompatibilityEnabled = 'ItemCompatibilityEnabled';
	const CompatibleVehicleType = 'CompatibleVehicleType';
	const COLUMN_NAMES = [
		'SiteID',
		'CategoryId',
		'CategoryParentId',
		'CategoryLevel',
		'CategoryName',
		'LeafCategory',
		'VariationsEnabled',
		'ConditionEnabled',
		'ConditionValues',
		'ItemSpecificsEnabled',
		'AttributeConversionEnabled',
		'ItemCompatibilityEnabled',
		'CompatibleVehicleType',
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
		'CategoryId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CategoryParentId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CategoryLevel' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CategoryName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'LeafCategory' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'VariationsEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ConditionEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ConditionValues' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ItemSpecificsEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AttributeConversionEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ItemCompatibilityEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CompatibleVehicleType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int SiteID */
	public $SiteID;

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int CategoryParentId */
	public $CategoryParentId;

	/** @var int CategoryLevel */
	public $CategoryLevel;

	/** @var string CategoryName */
	public $CategoryName;

	/** @var int LeafCategory */
	public $LeafCategory;

	/** @var int VariationsEnabled */
	public $VariationsEnabled;

	/** @var int ConditionEnabled */
	public $ConditionEnabled;

	/** @var string ConditionValues */
	public $ConditionValues;

	/** @var int ItemSpecificsEnabled */
	public $ItemSpecificsEnabled;

	/** @var int AttributeConversionEnabled */
	public $AttributeConversionEnabled;

	/** @var int ItemCompatibilityEnabled */
	public $ItemCompatibilityEnabled;

	/** @var string CompatibleVehicleType */
	public $CompatibleVehicleType;
}
