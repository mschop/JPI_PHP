<?php

namespace App\Db\Schema;

class tVersandtoolDruckEinstellung
{
	const TABLE_NAME = 'tVersandtoolDruckEinstellung';
	const kVersandtoolDruckEinstellung = 'kVersandtoolDruckEinstellung';
	const nVersandSchnittstelle = 'nVersandSchnittstelle';
	const cRechnername = 'cRechnername';
	const kBenutzer = 'kBenutzer';
	const cDruckername = 'cDruckername';
	const nPageScaling = 'nPageScaling';
	const nOrientation = 'nOrientation';
	const COLUMN_NAMES = [
		'kVersandtoolDruckEinstellung',
		'nVersandSchnittstelle',
		'cRechnername',
		'kBenutzer',
		'cDruckername',
		'nPageScaling',
		'nOrientation',
	];
	const COLUMN_DEFINITIONS = [
		'kVersandtoolDruckEinstellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVersandSchnittstelle' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnername' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDruckername' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
		'nPageScaling' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nOrientation' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kVersandtoolDruckEinstellung */
	public $kVersandtoolDruckEinstellung;

	/** @var int nVersandSchnittstelle */
	public $nVersandSchnittstelle;

	/** @var resource cRechnername */
	public $cRechnername;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var resource cDruckername */
	public $cDruckername;

	/** @var int nPageScaling */
	public $nPageScaling;

	/** @var int nOrientation */
	public $nOrientation;
}
