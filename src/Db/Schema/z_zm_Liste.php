<?php

namespace App\Db\Schema;

class z_zm_Liste
{
	const TABLE_NAME = 'z_zm_Liste';
	const kListe = 'kListe';
	const cKey = 'cKey';
	const cDesc = 'cDesc';
	const nStatus = 'nStatus';
	const COLUMN_NAMES = ['kListe', 'cKey', 'cDesc', 'nStatus'];
	const COLUMN_DEFINITIONS = [
		'kListe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKey' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cDesc' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kListe */
	public $kListe;

	/** @var string cKey */
	public $cKey;

	/** @var string cDesc */
	public $cDesc;

	/** @var int nStatus */
	public $nStatus;
}
