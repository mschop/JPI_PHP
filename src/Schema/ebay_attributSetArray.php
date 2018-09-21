<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kItem' => 'int',
		'AttributeSetId' => 'int',
		'AttributeId' => 'int',
		'ValueId' => 'int',
		'ValueLiteral' => 'varchar',
		'kCategoryID' => 'int',
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
