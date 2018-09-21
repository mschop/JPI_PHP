<?php

namespace App\Schema;

class tDruckQueue
{
	const TABLE_NAME = 'tDruckQueue';
	const kDruckQueue = 'kDruckQueue';
	const dZeitstempel = 'dZeitstempel';
	const kBenutzer = 'kBenutzer';
	const nStatus = 'nStatus';
	const kLHM = 'kLHM';
	const kWarenlagerPlatz = 'kWarenlagerPlatz';
	const COLUMN_NAMES = ['kDruckQueue', 'dZeitstempel', 'kBenutzer', 'nStatus', 'kLHM', 'kWarenlagerPlatz'];
	const COLUMN_TYPES = [
		'kDruckQueue' => 'int',
		'dZeitstempel' => 'datetime',
		'kBenutzer' => 'int',
		'nStatus' => 'tinyint',
		'kLHM' => 'int',
		'kWarenlagerPlatz' => 'int',
	];

	/** @var int kDruckQueue */
	public $kDruckQueue;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nStatus */
	public $nStatus;

	/** @var int kLHM */
	public $kLHM;

	/** @var int kWarenlagerPlatz */
	public $kWarenlagerPlatz;
}
