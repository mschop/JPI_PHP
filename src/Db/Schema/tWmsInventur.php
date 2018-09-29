<?php

namespace App\Db\Schema;

class tWmsInventur
{
	const TABLE_NAME = 'tWmsInventur';
	const kWmsInventur = 'kWmsInventur';
	const cKommentar = 'cKommentar';
	const dAngelegt = 'dAngelegt';
	const kBenutzer = 'kBenutzer';
	const nStatus = 'nStatus';
	const kWarenlager = 'kWarenlager';
	const COLUMN_NAMES = ['kWmsInventur', 'cKommentar', 'dAngelegt', 'kBenutzer', 'nStatus', 'kWarenlager'];
	const COLUMN_DEFINITIONS = [
		'kWmsInventur' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dAngelegt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWmsInventur */
	public $kWmsInventur;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string dAngelegt */
	public $dAngelegt;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nStatus */
	public $nStatus;

	/** @var int kWarenlager */
	public $kWarenlager;
}
