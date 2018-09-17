<?php

namespace App\Schema;

class ebay_vw_htmltemplatedata
{
	const TABLE_NAME = 'ebay_vw_htmltemplatedata';
	const kEbayHtmlTemplateData = 'kEbayHtmlTemplateData';
	const bData = 'bData';
	const cTemplate = 'cTemplate';

	/** @var int kEbayHtmlTemplateData */
	public $kEbayHtmlTemplateData;

	/** @var resource bData */
	public $bData;

	/** @var resource cTemplate */
	public $cTemplate;
}
