<?php

namespace App\Schema;

class pf_amazon_DotLiquidMapping
{
	const TABLE_NAME = 'pf_amazon_DotLiquidMapping';
	const kDotLiquidMapping = 'kDotLiquidMapping';
	const kGroup = 'kGroup';
	const cKey = 'cKey';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kDotLiquidMapping', 'kGroup', 'cKey', 'cValue'];
	const COLUMN_TYPES = ['kDotLiquidMapping' => 'int', 'kGroup' => 'int', 'cKey' => 'varchar', 'cValue' => 'nvarchar'];

	/** @var int kDotLiquidMapping */
	public $kDotLiquidMapping;

	/** @var int kGroup */
	public $kGroup;

	/** @var string cKey */
	public $cKey;

	/** @var resource cValue */
	public $cValue;
}
