<?php

namespace App\Db\Schema;

class ebay_data_htmltemplatetagcontent
{
	const TABLE_NAME = 'ebay_data_htmltemplatetagcontent';
	const kEbayHtmlTemplateTagContent = 'kEbayHtmlTemplateTagContent';
	const kEbayHtmlTemplate = 'kEbayHtmlTemplate';
	const cTagName = 'cTagName';
	const kEbayItem = 'kEbayItem';
	const cTagValue = 'cTagValue';
	const cTagOptions = 'cTagOptions';
	const COLUMN_NAMES = [
		'kEbayHtmlTemplateTagContent',
		'kEbayHtmlTemplate',
		'cTagName',
		'kEbayItem',
		'cTagValue',
		'cTagOptions',
	];
	const COLUMN_DEFINITIONS = [
		'kEbayHtmlTemplateTagContent' => [
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
		'cTagName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kEbayItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTagValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cTagOptions' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEbayHtmlTemplateTagContent */
	public $kEbayHtmlTemplateTagContent;

	/** @var int kEbayHtmlTemplate */
	public $kEbayHtmlTemplate;

	/** @var string cTagName */
	public $cTagName;

	/** @var int kEbayItem */
	public $kEbayItem;

	/** @var string cTagValue */
	public $cTagValue;

	/** @var string cTagOptions */
	public $cTagOptions;
}
