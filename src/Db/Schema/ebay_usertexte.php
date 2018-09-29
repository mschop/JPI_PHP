<?php

namespace App\Db\Schema;

class ebay_usertexte
{
	const TABLE_NAME = 'ebay_usertexte';
	const kEbayUserTexte = 'kEbayUserTexte';
	const kEbayUser = 'kEbayUser';
	const cTagName = 'cTagName';
	const cText = 'cText';
	const COLUMN_NAMES = ['kEbayUserTexte', 'kEbayUser', 'cTagName', 'cText'];
	const COLUMN_DEFINITIONS = [
		'kEbayUserTexte' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTagName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kEbayUserTexte */
	public $kEbayUserTexte;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cTagName */
	public $cTagName;

	/** @var string cText */
	public $cText;
}
