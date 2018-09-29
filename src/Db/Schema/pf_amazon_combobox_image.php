<?php

namespace App\Db\Schema;

class pf_amazon_combobox_image
{
	const TABLE_NAME = 'pf_amazon_combobox_image';
	const kImage = 'kImage';
	const cEnumToString = 'cEnumToString';
	const cPK = 'cPK';
	const oImage = 'oImage';
	const cText = 'cText';
	const COLUMN_NAMES = ['kImage', 'cEnumToString', 'cPK', 'oImage', 'cText'];
	const COLUMN_DEFINITIONS = [
		'kImage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cEnumToString' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cPK' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'oImage' => [
			'type' => 'image',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => null,
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
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
