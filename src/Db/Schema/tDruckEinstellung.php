<?php

namespace App\Db\Schema;

class tDruckEinstellung
{
	const TABLE_NAME = 'tDruckEinstellung';
	const kDruckEinstellung = 'kDruckEinstellung';
	const kBenutzer = 'kBenutzer';
	const cArbeitsplatz = 'cArbeitsplatz';
	const kDruckvorlage = 'kDruckvorlage';
	const cDruckername1 = 'cDruckername1';
	const cDruckername2 = 'cDruckername2';
	const COLUMN_NAMES = ['kDruckEinstellung', 'kBenutzer', 'cArbeitsplatz', 'kDruckvorlage', 'cDruckername1', 'cDruckername2'];
	const COLUMN_DEFINITIONS = [
		'kDruckEinstellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArbeitsplatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'kDruckvorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDruckername1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cDruckername2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kDruckEinstellung */
	public $kDruckEinstellung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cArbeitsplatz */
	public $cArbeitsplatz;

	/** @var int kDruckvorlage */
	public $kDruckvorlage;

	/** @var string cDruckername1 */
	public $cDruckername1;

	/** @var string cDruckername2 */
	public $cDruckername2;
}
