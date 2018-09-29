<?php

namespace App\Db\Schema;

class tXMLBestellImport
{
	const TABLE_NAME = 'tXMLBestellImport';
	const kXMLBestellImport = 'kXMLBestellImport';
	const cText = 'cText';
	const nPlattform = 'nPlattform';
	const nRechnung = 'nRechnung';
	const COLUMN_NAMES = ['kXMLBestellImport', 'cText', 'nPlattform', 'nRechnung'];
	const COLUMN_DEFINITIONS = [
		'kXMLBestellImport' => [
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
		'nRechnung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kXMLBestellImport */
	public $kXMLBestellImport;

	/** @var string cText */
	public $cText;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nRechnung */
	public $nRechnung;
}
