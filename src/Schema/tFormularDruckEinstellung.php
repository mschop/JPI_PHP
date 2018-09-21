<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kFormularDruckEinstellung' => 'int',
		'kFormular' => 'int',
		'cRechnername' => 'varchar',
		'kBenutzer' => 'int',
		'cDruckername1' => 'varchar',
		'nKopien1' => 'int',
		'cDruckername2' => 'varchar',
		'nKopien2' => 'int',
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
