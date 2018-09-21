<?php

namespace App\Schema;

class ebay_vw_htmltemplatedata
{
	const TABLE_NAME = 'ebay_vw_htmltemplatedata';
	const kEbayHtmlTemplateData = 'kEbayHtmlTemplateData';
	const bData = 'bData';
	const cTemplate = 'cTemplate';
	const COLUMN_NAMES = ['kEbayHtmlTemplateData', 'bData', 'cTemplate'];
	const COLUMN_TYPES = ['kEbayHtmlTemplateData' => 'int', 'bData' => 'varbinary', 'cTemplate' => 'nvarchar'];

	/** @var int kEbayHtmlTemplateData */
	public $kEbayHtmlTemplateData;

	/** @var resource bData */
	public $bData;

	/** @var resource cTemplate */
	public $cTemplate;
}
