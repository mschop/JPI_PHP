<?php

namespace App\Schema;

class ebay_de_isrelation
{
	const TABLE_NAME = 'ebay_de_isrelation';
	const CategoryId = 'CategoryId';
	const kName = 'kName';
	const kValue = 'kValue';
	const kNameParent = 'kNameParent';
	const kValueParent = 'kValueParent';
	const COLUMN_NAMES = ['CategoryId', 'kName', 'kValue', 'kNameParent', 'kValueParent'];
	const COLUMN_TYPES = [
		'CategoryId' => 'int',
		'kName' => 'int',
		'kValue' => 'int',
		'kNameParent' => 'int',
		'kValueParent' => 'int',
	];

	/** @var int CategoryId */
	public $CategoryId;

	/** @var int kName */
	public $kName;

	/** @var int kValue */
	public $kValue;

	/** @var int kNameParent */
	public $kNameParent;

	/** @var int kValueParent */
	public $kValueParent;
}
