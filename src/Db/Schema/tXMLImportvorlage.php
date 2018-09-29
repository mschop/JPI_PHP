<?php

namespace App\Db\Schema;

class tXMLImportvorlage
{
	const TABLE_NAME = 'tXMLImportvorlage';
	const kXmlImportvorlage = 'kXmlImportvorlage';
	const nTyp = 'nTyp';
	const cName = 'cName';
	const bVorlage = 'bVorlage';
	const COLUMN_NAMES = ['kXmlImportvorlage', 'nTyp', 'cName', 'bVorlage'];
	const COLUMN_DEFINITIONS = [
		'kXmlImportvorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 40,
			'characterSetName' => 'iso_1',
		],
		'bVorlage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kXmlImportvorlage */
	public $kXmlImportvorlage;

	/** @var int nTyp */
	public $nTyp;

	/** @var string cName */
	public $cName;

	/** @var string bVorlage */
	public $bVorlage;
}
