<?php

namespace App\Db\Schema;

class tXMLGutschriftImport
{
	const TABLE_NAME = 'tXMLGutschriftImport';
	const kXMLGutschriftImport = 'kXMLGutschriftImport';
	const cText = 'cText';
	const nPlattform = 'nPlattform';
	const COLUMN_NAMES = ['kXMLGutschriftImport', 'cText', 'nPlattform'];
	const COLUMN_DEFINITIONS = [
		'kXMLGutschriftImport' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nPlattform' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kXMLGutschriftImport */
	public $kXMLGutschriftImport;

	/** @var string cText */
	public $cText;

	/** @var int nPlattform */
	public $nPlattform;
}
