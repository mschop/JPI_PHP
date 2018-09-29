<?php

namespace App\Db\Schema;

class ebay_de_value
{
	const TABLE_NAME = 'ebay_de_value';
	const ValueId = 'ValueId';
	const AttributeId = 'AttributeId';
	const AttributeSetId = 'AttributeSetId';
	const parentValueId = 'parentValueId';
	const Name = 'Name';
	const COLUMN_NAMES = ['ValueId', 'AttributeId', 'AttributeSetId', 'parentValueId', 'Name'];
	const COLUMN_DEFINITIONS = [
		'ValueId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'parentValueId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Name' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
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
