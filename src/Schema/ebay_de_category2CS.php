<?php

namespace App\Schema;

class ebay_de_category2CS
{
	const TABLE_NAME = 'ebay_de_category2CS';
	const CategoryId = 'CategoryId';
	const AttributeSetId = 'AttributeSetId';
	const AttributeSetVersion = 'AttributeSetVersion';
	const Name = 'Name';
	const COLUMN_NAMES = ['CategoryId', 'AttributeSetId', 'AttributeSetVersion', 'Name'];
	const COLUMN_TYPES = [
		'CategoryId' => 'int',
		'AttributeSetId' => 'int',
		'AttributeSetVersion' => 'int',
		'Name' => 'varchar',
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
