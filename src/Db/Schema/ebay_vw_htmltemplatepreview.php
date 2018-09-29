<?php

namespace App\Db\Schema;

class ebay_vw_htmltemplatepreview
{
	const TABLE_NAME = 'ebay_vw_htmltemplatepreview';
	const kHtmlTemplate = 'kHtmlTemplate';
	const pict = 'pict';
	const size = 'size';
	const COLUMN_NAMES = ['kHtmlTemplate', 'pict', 'size'];
	const COLUMN_DEFINITIONS = [
		'kHtmlTemplate' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'pict' => [
			'type' => 'image',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => null,
		],
		'size' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kHtmlTemplate */
	public $kHtmlTemplate;

	/** @var resource pict */
	public $pict;

	/** @var int size */
	public $size;
}
