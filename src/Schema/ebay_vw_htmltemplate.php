<?php

namespace App\Schema;

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
