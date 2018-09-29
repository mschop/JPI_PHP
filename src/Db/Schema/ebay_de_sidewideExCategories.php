<?php

namespace App\Db\Schema;

class ebay_de_sidewideExCategories
{
	const TABLE_NAME = 'ebay_de_sidewideExCategories';
	const CategoryId = 'CategoryId';
	const AttributeSetId = 'AttributeSetId';
	const COLUMN_NAMES = ['CategoryId', 'AttributeSetId'];
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
	];

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int AttributeSetId */
	public $AttributeSetId;
}
