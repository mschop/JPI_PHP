<?php

namespace App\Db\Schema;

class tEigenschaftWertSprache
{
	const TABLE_NAME = 'tEigenschaftWertSprache';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kEigenschaftWert', 'kSprache', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kEigenschaftWert' => [
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

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
