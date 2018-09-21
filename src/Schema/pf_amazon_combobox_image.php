<?php

namespace App\Schema;

class pf_amazon_combobox_image
{
	const TABLE_NAME = 'pf_amazon_combobox_image';
	const kImage = 'kImage';
	const cEnumToString = 'cEnumToString';
	const cPK = 'cPK';
	const oImage = 'oImage';
	const cText = 'cText';
	const COLUMN_NAMES = ['kImage', 'cEnumToString', 'cPK', 'oImage', 'cText'];
	const COLUMN_TYPES = [
		'kImage' => 'int',
		'cEnumToString' => 'varchar',
		'cPK' => 'varchar',
		'oImage' => 'image',
		'cText' => 'varchar',
	];

	/** @var int kImage */
	public $kImage;

	/** @var string cEnumToString */
	public $cEnumToString;

	/** @var string cPK */
	public $cPK;

	/** @var resource oImage */
	public $oImage;

	/** @var string cText */
	public $cText;
}
