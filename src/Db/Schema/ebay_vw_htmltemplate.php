<?php

namespace App\Db\Schema;

class ebay_vw_htmltemplate
{
	const TABLE_NAME = 'ebay_vw_htmltemplate';
	const kEbayHtmlTemplate = 'kEbayHtmlTemplate';
	const cHtmlTemplateName = 'cHtmlTemplateName';
	const cHtmlTemplateDescription = 'cHtmlTemplateDescription';
	const dCreated = 'dCreated';
	const nIsDefault = 'nIsDefault';
	const dUploaded = 'dUploaded';
	const nEbayHtmlTemplateParent = 'nEbayHtmlTemplateParent';
	const kEbayHtmlTemplateData = 'kEbayHtmlTemplateData';
	const nDeleted = 'nDeleted';
	const COLUMN_NAMES = [
		'kEbayHtmlTemplate',
		'cHtmlTemplateName',
		'cHtmlTemplateDescription',
		'dCreated',
		'nIsDefault',
		'dUploaded',
		'nEbayHtmlTemplateParent',
		'kEbayHtmlTemplateData',
		'nDeleted',
	];
	const COLUMN_DEFINITIONS = [
		'kEbayHtmlTemplate' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHtmlTemplateName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cHtmlTemplateDescription' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dCreated' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIsDefault' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dUploaded' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEbayHtmlTemplateParent' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayHtmlTemplateData' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDeleted' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEbayHtmlTemplate */
	public $kEbayHtmlTemplate;

	/** @var string cHtmlTemplateName */
	public $cHtmlTemplateName;

	/** @var string cHtmlTemplateDescription */
	public $cHtmlTemplateDescription;

	/** @var string dCreated */
	public $dCreated;

	/** @var int nIsDefault */
	public $nIsDefault;

	/** @var string dUploaded */
	public $dUploaded;

	/** @var int nEbayHtmlTemplateParent */
	public $nEbayHtmlTemplateParent;

	/** @var int kEbayHtmlTemplateData */
	public $kEbayHtmlTemplateData;

	/** @var int nDeleted */
	public $nDeleted;
}
