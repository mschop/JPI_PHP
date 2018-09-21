<?php

namespace App\Schema;

class ebay_de_sidewideExCategories
{
	const TABLE_NAME = 'ebay_de_sidewideExCategories';
	const CategoryId = 'CategoryId';
	const AttributeSetId = 'AttributeSetId';
	const COLUMN_NAMES = ['CategoryId', 'AttributeSetId'];
	const COLUMN_TYPES = ['CategoryId' => 'int', 'AttributeSetId' => 'int'];

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int AttributeSetId */
	public $AttributeSetId;
}
