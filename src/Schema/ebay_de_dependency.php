<?php

namespace App\Schema;

class ebay_de_dependency
{
	const TABLE_NAME = 'ebay_de_dependency';
	const childAttrId = 'childAttrId';
	const parentValueId = 'parentValueId';
	const AttributeId = 'AttributeId';
	const AttributeSetId = 'AttributeSetId';
	const Type = 'Type';
	const COLUMN_NAMES = ['childAttrId', 'parentValueId', 'AttributeId', 'AttributeSetId', 'Type'];
	const COLUMN_TYPES = [
		'childAttrId' => 'int',
		'parentValueId' => 'int',
		'AttributeId' => 'int',
		'AttributeSetId' => 'int',
		'Type' => 'tinyint',
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
