<?php

namespace App\Schema;

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
