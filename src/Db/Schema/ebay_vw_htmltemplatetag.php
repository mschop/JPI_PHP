<?php

namespace App\Db\Schema;

class ebay_vw_htmltemplatetag
{
	const TABLE_NAME = 'ebay_vw_htmltemplatetag';
	const kEbayHtmlTemplateTag = 'kEbayHtmlTemplateTag';
	const kEbayHtmlTemplate = 'kEbayHtmlTemplate';
	const cTagType = 'cTagType';
	const cTagName = 'cTagName';
	const cTagExtension = 'cTagExtension';
	const COLUMN_NAMES = ['kEbayHtmlTemplateTag', 'kEbayHtmlTemplate', 'cTagType', 'cTagName', 'cTagExtension'];
	const COLUMN_DEFINITIONS = [
		'kEbayHtmlTemplateTag' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayHtmlTemplate' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTagType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTagName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTagExtension' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEbayHtmlTemplateTag */
	public $kEbayHtmlTemplateTag;

	/** @var int kEbayHtmlTemplate */
	public $kEbayHtmlTemplate;

	/** @var string cTagType */
	public $cTagType;

	/** @var string cTagName */
	public $cTagName;

	/** @var string cTagExtension */
	public $cTagExtension;
}
