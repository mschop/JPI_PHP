<?php

namespace App\Db\Schema;

class tDTAUS
{
	const TABLE_NAME = 'tDTAUS';
	const cName = 'cName';
	const cZeile1 = 'cZeile1';
	const cZeile2 = 'cZeile2';
	const nZahlung = 'nZahlung';
	const cKontoInhaber = 'cKontoInhaber';
	const cBLZ = 'cBLZ';
	const cKontoNr = 'cKontoNr';
	const COLUMN_NAMES = ['cName', 'cZeile1', 'cZeile2', 'nZahlung', 'cKontoInhaber', 'cBLZ', 'cKontoNr'];
	const COLUMN_DEFINITIONS = [
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 512,
			'characterSetName' => 'iso_1',
		],
		'cZeile1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 27,
			'characterSetName' => 'iso_1',
		],
		'cZeile2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 27,
			'characterSetName' => 'iso_1',
		],
		'nZahlung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKontoInhaber' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 28,
			'characterSetName' => 'iso_1',
		],
		'cBLZ' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8,
			'characterSetName' => 'iso_1',
		],
		'cKontoNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string cName */
	public $cName;

	/** @var string cZeile1 */
	public $cZeile1;

	/** @var string cZeile2 */
	public $cZeile2;

	/** @var int nZahlung */
	public $nZahlung;

	/** @var string cKontoInhaber */
	public $cKontoInhaber;

	/** @var string cBLZ */
	public $cBLZ;

	/** @var string cKontoNr */
	public $cKontoNr;
}
