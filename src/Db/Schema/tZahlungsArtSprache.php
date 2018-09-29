<?php

namespace App\Db\Schema;

class tZahlungsArtSprache
{
	const TABLE_NAME = 'tZahlungsArtSprache';
	const kZahlungsart = 'kZahlungsart';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cPrtString = 'cPrtString';
	const cPrtStringVor = 'cPrtStringVor';
	const COLUMN_NAMES = ['kZahlungsart', 'kSprache', 'cName', 'cPrtString', 'cPrtStringVor'];
	const COLUMN_DEFINITIONS = [
		'kZahlungsart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPrtString' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cPrtStringVor' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kZahlungsart */
	public $kZahlungsart;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cPrtString */
	public $cPrtString;

	/** @var string cPrtStringVor */
	public $cPrtStringVor;
}
