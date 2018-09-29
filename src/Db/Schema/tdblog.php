<?php

namespace App\Db\Schema;

class tdblog
{
	const TABLE_NAME = 'tdblog';
	const cKategorie = 'cKategorie';
	const cException = 'cException';
	const cInfo = 'cInfo';
	const dZeit = 'dZeit';
	const COLUMN_NAMES = ['cKategorie', 'cException', 'cInfo', 'dZeit'];
	const COLUMN_DEFINITIONS = [
		'cKategorie' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cException' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'cInfo' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'dZeit' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cKategorie */
	public $cKategorie;

	/** @var string cException */
	public $cException;

	/** @var string cInfo */
	public $cInfo;

	/** @var string dZeit */
	public $dZeit;
}
