<?php

namespace App\Db\Schema;

class ebay_de_dependency
{
	const TABLE_NAME = 'ebay_de_dependency';
	const childAttrId = 'childAttrId';
	const parentValueId = 'parentValueId';
	const AttributeId = 'AttributeId';
	const AttributeSetId = 'AttributeSetId';
	const Type = 'Type';
	const COLUMN_NAMES = ['childAttrId', 'parentValueId', 'AttributeId', 'AttributeSetId', 'Type'];
	const COLUMN_DEFINITIONS = [
		'childAttrId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'parentValueId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AttributeId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AttributeSetId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Type' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int childAttrId */
	public $childAttrId;

	/** @var int parentValueId */
	public $parentValueId;

	/** @var int AttributeId */
	public $AttributeId;

	/** @var int AttributeSetId */
	public $AttributeSetId;

	/** @var int Type */
	public $Type;
}
