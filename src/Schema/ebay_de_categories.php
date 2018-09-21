<?php

namespace App\Schema;

class ebay_de_categories
{
	const TABLE_NAME = 'ebay_de_categories';
	const CategoryId = 'CategoryId';
	const CategoryParentId = 'CategoryParentId';
	const CategoryLevel = 'CategoryLevel';
	const CategoryName = 'CategoryName';
	const B2BVATEnabled = 'B2BVATEnabled';
	const IntlAutosFixedCat = 'IntlAutosFixedCat';
	const LeafCategory = 'LeafCategory';
	const ORPA = 'ORPA';
	const ORRA = 'ORRA';
	const LSD = 'LSD';
	const VariationsEnabled = 'VariationsEnabled';
	const ConditionEnabled = 'ConditionEnabled';
	const ConditionValues = 'ConditionValues';
	const ItemSpecificsEnabled = 'ItemSpecificsEnabled';
	const AttributeConversionEnabled = 'AttributeConversionEnabled';
	const COLUMN_NAMES = [
		'CategoryId',
		'CategoryParentId',
		'CategoryLevel',
		'CategoryName',
		'B2BVATEnabled',
		'IntlAutosFixedCat',
		'LeafCategory',
		'ORPA',
		'ORRA',
		'LSD',
		'VariationsEnabled',
		'ConditionEnabled',
		'ConditionValues',
		'ItemSpecificsEnabled',
		'AttributeConversionEnabled',
	];
	const COLUMN_TYPES = [
		'CategoryId' => 'int',
		'CategoryParentId' => 'int',
		'CategoryLevel' => 'tinyint',
		'CategoryName' => 'varchar',
		'B2BVATEnabled' => 'tinyint',
		'IntlAutosFixedCat' => 'tinyint',
		'LeafCategory' => 'tinyint',
		'ORPA' => 'tinyint',
		'ORRA' => 'tinyint',
		'LSD' => 'tinyint',
		'VariationsEnabled' => 'tinyint',
		'ConditionEnabled' => 'tinyint',
		'ConditionValues' => 'varchar',
		'ItemSpecificsEnabled' => 'tinyint',
		'AttributeConversionEnabled' => 'tinyint',
	];

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int CategoryParentId */
	public $CategoryParentId;

	/** @var int CategoryLevel */
	public $CategoryLevel;

	/** @var string CategoryName */
	public $CategoryName;

	/** @var int B2BVATEnabled */
	public $B2BVATEnabled;

	/** @var int IntlAutosFixedCat */
	public $IntlAutosFixedCat;

	/** @var int LeafCategory */
	public $LeafCategory;

	/** @var int ORPA */
	public $ORPA;

	/** @var int ORRA */
	public $ORRA;

	/** @var int LSD */
	public $LSD;

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
}
