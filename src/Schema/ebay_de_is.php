<?php

namespace App\Schema;

class ebay_de_is
{
	const TABLE_NAME = 'ebay_de_is';
	const CategoryId = 'CategoryId';
	const kName = 'kName';
	const cHelpText = 'cHelpText';
	const cHelpURL = 'cHelpURL';
	const nSelectionMode = 'nSelectionMode';
	const nMaxValues = 'nMaxValues';
	const nMinValues = 'nMinValues';
	const nSort = 'nSort';

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int kName */
	public $kName;

	/** @var string cHelpText */
	public $cHelpText;

	/** @var string cHelpURL */
	public $cHelpURL;

	/** @var int nSelectionMode */
	public $nSelectionMode;

	/** @var int nMaxValues */
	public $nMaxValues;

	/** @var int nMinValues */
	public $nMinValues;

	/** @var int nSort */
	public $nSort;
}
