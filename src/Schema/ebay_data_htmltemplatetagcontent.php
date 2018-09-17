<?php

namespace App\Schema;

class ebay_data_htmltemplatetagcontent
{
	const TABLE_NAME = 'ebay_data_htmltemplatetagcontent';
	const kEbayHtmlTemplateTagContent = 'kEbayHtmlTemplateTagContent';
	const kEbayHtmlTemplate = 'kEbayHtmlTemplate';
	const cTagName = 'cTagName';
	const kEbayItem = 'kEbayItem';
	const cTagValue = 'cTagValue';
	const cTagOptions = 'cTagOptions';

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
