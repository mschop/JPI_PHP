<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
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
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CategoryLevel' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'CategoryName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'B2BVATEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'IntlAutosFixedCat' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'LeafCategory' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ORPA' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ORRA' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'LSD' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'VariationsEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ConditionEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ConditionValues' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ItemSpecificsEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AttributeConversionEnabled' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
