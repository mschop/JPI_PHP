<?php

namespace App\Db\Schema;

class tFormularDruckEinstellung
{
	const TABLE_NAME = 'tFormularDruckEinstellung';
	const kFormularDruckEinstellung = 'kFormularDruckEinstellung';
	const kFormular = 'kFormular';
	const cRechnername = 'cRechnername';
	const kBenutzer = 'kBenutzer';
	const cDruckername1 = 'cDruckername1';
	const nKopien1 = 'nKopien1';
	const cDruckername2 = 'cDruckername2';
	const nKopien2 = 'nKopien2';
	const COLUMN_NAMES = [
		'kFormularDruckEinstellung',
		'kFormular',
		'cRechnername',
		'kBenutzer',
		'cDruckername1',
		'nKopien1',
		'cDruckername2',
		'nKopien2',
	];
	const COLUMN_DEFINITIONS = [
		'kFormularDruckEinstellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormular' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDruckername1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nKopien1' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDruckername2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nKopien2' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kFormularDruckEinstellung */
	public $kFormularDruckEinstellung;

	/** @var int kFormular */
	public $kFormular;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cDruckername1 */
	public $cDruckername1;

	/** @var int nKopien1 */
	public $nKopien1;

	/** @var string cDruckername2 */
	public $cDruckername2;

	/** @var int nKopien2 */
	public $nKopien2;
}
