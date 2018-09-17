<?php

namespace App\Schema;

class pf_amazon_DotLiquidMapping
{
	const TABLE_NAME = 'pf_amazon_DotLiquidMapping';
	const kDotLiquidMapping = 'kDotLiquidMapping';
	const kGroup = 'kGroup';
	const cKey = 'cKey';
	const cValue = 'cValue';

	/** @var int kDotLiquidMapping */
	public $kDotLiquidMapping;

	/** @var int kGroup */
	public $kGroup;

	/** @var string cKey */
	public $cKey;

	/** @var resource cValue */
	public $cValue;
}
