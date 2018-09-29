<?php

namespace App\Db\Schema;

class tMedienDateiAttribut
{
	const TABLE_NAME = 'tMedienDateiAttribut';
	const kMediendateiAttribut = 'kMediendateiAttribut';
	const kMedienDatei = 'kMedienDatei';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kMediendateiAttribut', 'kMedienDatei', 'kSprache', 'cName', 'cWert'];
	const COLUMN_DEFINITIONS = [
		'kMediendateiAttribut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMedienDatei' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kMediendateiAttribut */
	public $kMediendateiAttribut;

	/** @var int kMedienDatei */
	public $kMedienDatei;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
