<?php

namespace App\Db\Schema;

class ebay_de_sidewideCS
{
	const TABLE_NAME = 'ebay_de_sidewideCS';
	const AttributeSetId = 'AttributeSetId';
	const AttributeSetVersion = 'AttributeSetVersion';
	const Name = 'Name';
	const COLUMN_NAMES = ['AttributeSetId', 'AttributeSetVersion', 'Name'];
	const COLUMN_DEFINITIONS = [
		'AttributeSetId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
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

	/** @var int AttributeSetId */
	public $AttributeSetId;

	/** @var int AttributeSetVersion */
	public $AttributeSetVersion;

	/** @var string Name */
	public $Name;
}
