<?php

namespace App\Db\Schema;

class tLizenz
{
	const TABLE_NAME = 'tLizenz';
	const cAuthId = 'cAuthId';
	const cAuthToken = 'cAuthToken';
	const bLizenzen = 'bLizenzen';
	const bSignatur = 'bSignatur';
	const dDatum = 'dDatum';
	const COLUMN_NAMES = ['cAuthId', 'cAuthToken', 'bLizenzen', 'bSignatur', 'dDatum'];
	const COLUMN_DEFINITIONS = [
		'cAuthId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'cAuthToken' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 32,
			'characterSetName' => 'iso_1',
		],
		'bLizenzen' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
		'bSignatur' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1024,
			'characterSetName' => null,
		],
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cAuthId */
	public $cAuthId;

	/** @var string cAuthToken */
	public $cAuthToken;

	/** @var resource bLizenzen */
	public $bLizenzen;

	/** @var resource bSignatur */
	public $bSignatur;

	/** @var string dDatum */
	public $dDatum;
}
