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
