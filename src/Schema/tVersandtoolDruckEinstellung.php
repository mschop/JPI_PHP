<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kVersandtoolDruckEinstellung' => 'int',
		'nVersandSchnittstelle' => 'tinyint',
		'cRechnername' => 'nvarchar',
		'kBenutzer' => 'int',
		'cDruckername' => 'nvarchar',
		'nPageScaling' => 'tinyint',
		'nOrientation' => 'tinyint',
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
