<?php

namespace App\Db\Schema;

class pf_amazon_versandgruppen
{
	const TABLE_NAME = 'pf_amazon_versandgruppen';
	const kAmazonVersandgruppe = 'kAmazonVersandgruppe';
	const kUser = 'kUser';
	const cAmazonInterneId = 'cAmazonInterneId';
	const cName = 'cName';
	const COLUMN_NAMES = ['kAmazonVersandgruppe', 'kUser', 'cAmazonInterneId', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kAmazonVersandgruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAmazonInterneId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kAmazonVersandgruppe */
	public $kAmazonVersandgruppe;

	/** @var int kUser */
	public $kUser;

	/** @var string cAmazonInterneId */
	public $cAmazonInterneId;

	/** @var string cName */
	public $cName;
}
