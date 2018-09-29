<?php

namespace App\Db\Schema;

class tEigenschaftSprache
{
	const TABLE_NAME = 'tEigenschaftSprache';
	const kEigenschaft = 'kEigenschaft';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kEigenschaft', 'kSprache', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kEigenschaft' => [
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
	];

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
