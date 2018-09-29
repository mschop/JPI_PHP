<?php

namespace App\Db\Schema;

class ebay_vw_htmltemplaterendered
{
	const TABLE_NAME = 'ebay_vw_htmltemplaterendered';
	const kEbay_vw_htmltemplaterendered = 'kEbay_vw_htmltemplaterendered';
	const kEbay_item = 'kEbay_item';
	const cTemplate = 'cTemplate';
	const COLUMN_NAMES = ['kEbay_vw_htmltemplaterendered', 'kEbay_item', 'cTemplate'];
	const COLUMN_DEFINITIONS = [
		'kEbay_vw_htmltemplaterendered' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbay_item' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTemplate' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
	];

	/** @var int kEbay_vw_htmltemplaterendered */
	public $kEbay_vw_htmltemplaterendered;

	/** @var int kEbay_item */
	public $kEbay_item;

	/** @var resource cTemplate */
	public $cTemplate;
}
