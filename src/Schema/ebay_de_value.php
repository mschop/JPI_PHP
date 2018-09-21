<?php

namespace App\Schema;

class ebay_de_value
{
	const TABLE_NAME = 'ebay_de_value';
	const ValueId = 'ValueId';
	const AttributeId = 'AttributeId';
	const AttributeSetId = 'AttributeSetId';
	const parentValueId = 'parentValueId';
	const Name = 'Name';
	const COLUMN_NAMES = ['ValueId', 'AttributeId', 'AttributeSetId', 'parentValueId', 'Name'];
	const COLUMN_TYPES = [
		'ValueId' => 'int',
		'AttributeId' => 'int',
		'AttributeSetId' => 'int',
		'parentValueId' => 'int',
		'Name' => 'varchar',
	];

	/** @var int ValueId */
	public $ValueId;

	/** @var int AttributeId */
	public $AttributeId;

	/** @var int AttributeSetId */
	public $AttributeSetId;

	/** @var int parentValueId */
	public $parentValueId;

	/** @var string Name */
	public $Name;
}
