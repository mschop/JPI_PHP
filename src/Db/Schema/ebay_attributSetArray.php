<?php

namespace App\Db\Schema;

class ebay_attributSetArray
{
	const TABLE_NAME = 'ebay_attributSetArray';
	const kItem = 'kItem';
	const AttributeSetId = 'AttributeSetId';
	const AttributeId = 'AttributeId';
	const ValueId = 'ValueId';
	const ValueLiteral = 'ValueLiteral';
	const kCategoryID = 'kCategoryID';
	const COLUMN_NAMES = ['kItem', 'AttributeSetId', 'AttributeId', 'ValueId', 'ValueLiteral', 'kCategoryID'];
	const COLUMN_DEFINITIONS = [
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AttributeSetId' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ValueId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ValueLiteral' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kCategoryID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kItem */
	public $kItem;

	/** @var int AttributeSetId */
	public $AttributeSetId;

	/** @var int AttributeId */
	public $AttributeId;

	/** @var int ValueId */
	public $ValueId;

	/** @var string ValueLiteral */
	public $ValueLiteral;

	/** @var int kCategoryID */
	public $kCategoryID;
}
