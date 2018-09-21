<?php

namespace App\Schema;

class ebay_vw_htmltemplaterendered
{
	const TABLE_NAME = 'ebay_vw_htmltemplaterendered';
	const kEbay_vw_htmltemplaterendered = 'kEbay_vw_htmltemplaterendered';
	const kEbay_item = 'kEbay_item';
	const cTemplate = 'cTemplate';
	const COLUMN_NAMES = ['kEbay_vw_htmltemplaterendered', 'kEbay_item', 'cTemplate'];
	const COLUMN_TYPES = ['kEbay_vw_htmltemplaterendered' => 'int', 'kEbay_item' => 'int', 'cTemplate' => 'nvarchar'];

	/** @var int kEbay_vw_htmltemplaterendered */
	public $kEbay_vw_htmltemplaterendered;

	/** @var int kEbay_item */
	public $kEbay_item;

	/** @var resource cTemplate */
	public $cTemplate;
}
