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
