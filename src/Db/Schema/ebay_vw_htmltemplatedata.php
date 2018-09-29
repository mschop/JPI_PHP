<?php

namespace App\Db\Schema;

class ebay_vw_htmltemplatedata
{
	const TABLE_NAME = 'ebay_vw_htmltemplatedata';
	const kEbayHtmlTemplateData = 'kEbayHtmlTemplateData';
	const bData = 'bData';
	const cTemplate = 'cTemplate';
	const COLUMN_NAMES = ['kEbayHtmlTemplateData', 'bData', 'cTemplate'];
	const COLUMN_DEFINITIONS = [
		'kEbayHtmlTemplateData' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bData' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
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

	/** @var int kEbayHtmlTemplateData */
	public $kEbayHtmlTemplateData;

	/** @var resource bData */
	public $bData;

	/** @var resource cTemplate */
	public $cTemplate;
}
