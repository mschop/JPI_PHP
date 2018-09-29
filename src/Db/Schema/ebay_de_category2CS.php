<?php

namespace App\Db\Schema;

class ebay_de_category2CS
{
	const TABLE_NAME = 'ebay_de_category2CS';
	const CategoryId = 'CategoryId';
	const AttributeSetId = 'AttributeSetId';
	const AttributeSetVersion = 'AttributeSetVersion';
	const Name = 'Name';
	const COLUMN_NAMES = ['CategoryId', 'AttributeSetId', 'AttributeSetVersion', 'Name'];
	const COLUMN_DEFINITIONS = [
		'CategoryId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AttributeSetId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AttributeSetVersion' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
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

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int AttributeSetId */
	public $AttributeSetId;

	/** @var int AttributeSetVersion */
	public $AttributeSetVersion;

	/** @var string Name */
	public $Name;
}
