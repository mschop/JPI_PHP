<?php

namespace App\Db\Schema;

class tAttributSprache
{
	const TABLE_NAME = 'tAttributSprache';
	const kAttribut = 'kAttribut';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cWertListe = 'cWertListe';
	const COLUMN_NAMES = ['kAttribut', 'kSprache', 'cName', 'cWertListe'];
	const COLUMN_DEFINITIONS = [
		'kAttribut' => [
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
		'cWertListe' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kAttribut */
	public $kAttribut;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cWertListe */
	public $cWertListe;
}
