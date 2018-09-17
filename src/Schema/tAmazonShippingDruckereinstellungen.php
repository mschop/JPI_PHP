<?php

namespace App\Schema;

class tAmazonShippingDruckereinstellungen
{
	const TABLE_NAME = 'tAmazonShippingDruckereinstellungen';
	const kAmazonShippingDruckereinstellungen = 'kAmazonShippingDruckereinstellungen';
	const kVersandart = 'kVersandart';
	const cRechnername = 'cRechnername';
	const kBenutzer = 'kBenutzer';
	const cDruckername = 'cDruckername';
	const nPageScaling = 'nPageScaling';

	/** @var int kAmazonShippingDruckereinstellungen */
	public $kAmazonShippingDruckereinstellungen;

	/** @var int kVersandart */
	public $kVersandart;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cDruckername */
	public $cDruckername;

	/** @var int nPageScaling */
	public $nPageScaling;
}
