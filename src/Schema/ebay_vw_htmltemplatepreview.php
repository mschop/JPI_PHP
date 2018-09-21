<?php

namespace App\Schema;

class ebay_vw_htmltemplatepreview
{
	const TABLE_NAME = 'ebay_vw_htmltemplatepreview';
	const kHtmlTemplate = 'kHtmlTemplate';
	const pict = 'pict';
	const size = 'size';
	const COLUMN_NAMES = ['kHtmlTemplate', 'pict', 'size'];
	const COLUMN_TYPES = ['kHtmlTemplate' => 'int', 'pict' => 'image', 'size' => 'int'];

	/** @var int kHtmlTemplate */
	public $kHtmlTemplate;

	/** @var resource pict */
	public $pict;

	/** @var int size */
	public $size;
}
