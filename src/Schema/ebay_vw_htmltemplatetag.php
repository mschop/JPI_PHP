<?php

namespace App\Schema;

class ebay_vw_htmltemplatetag
{
	const TABLE_NAME = 'ebay_vw_htmltemplatetag';
	const kEbayHtmlTemplateTag = 'kEbayHtmlTemplateTag';
	const kEbayHtmlTemplate = 'kEbayHtmlTemplate';
	const cTagType = 'cTagType';
	const cTagName = 'cTagName';
	const cTagExtension = 'cTagExtension';

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
