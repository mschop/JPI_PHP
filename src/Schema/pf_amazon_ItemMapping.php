<?php

namespace App\Schema;

class pf_amazon_ItemMapping
{
	const TABLE_NAME = 'pf_amazon_ItemMapping';
	const kItemMapping = 'kItemMapping';
	const kItem = 'kItem';
	const cKey = 'cKey';
	const cValue = 'cValue';

	/** @var int kItemMapping */
	public $kItemMapping;

	/** @var int kItem */
	public $kItem;

	/** @var string cKey */
	public $cKey;

	/** @var string cValue */
	public $cValue;
}
