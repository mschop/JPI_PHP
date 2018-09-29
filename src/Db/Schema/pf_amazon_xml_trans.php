<?php

namespace App\Db\Schema;

class pf_amazon_xml_trans
{
	const TABLE_NAME = 'pf_amazon_xml_trans';
	const cName = 'cName';
	const cEnglish = 'cEnglish';
	const cGerman = 'cGerman';
	const cFrench = 'cFrench';
	const cItalian = 'cItalian';
	const COLUMN_NAMES = ['cName', 'cEnglish', 'cGerman', 'cFrench', 'cItalian'];
	const COLUMN_DEFINITIONS = [
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cEnglish' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cGerman' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cFrench' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cItalian' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cName */
	public $cName;

	/** @var string cEnglish */
	public $cEnglish;

	/** @var string cGerman */
	public $cGerman;

	/** @var string cFrench */
	public $cFrench;

	/** @var string cItalian */
	public $cItalian;
}
