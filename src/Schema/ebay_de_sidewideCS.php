<?php

namespace App\Schema;

class ebay_de_sidewideCS
{
	const TABLE_NAME = 'ebay_de_sidewideCS';
	const AttributeSetId = 'AttributeSetId';
	const AttributeSetVersion = 'AttributeSetVersion';
	const Name = 'Name';
	const COLUMN_NAMES = ['AttributeSetId', 'AttributeSetVersion', 'Name'];
	const COLUMN_TYPES = ['AttributeSetId' => 'int', 'AttributeSetVersion' => 'int', 'Name' => 'varchar'];

	/** @var int AttributeSetId */
	public $AttributeSetId;

	/** @var int AttributeSetVersion */
	public $AttributeSetVersion;

	/** @var string Name */
	public $Name;
}
