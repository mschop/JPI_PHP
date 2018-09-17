<?php

namespace App\Schema;

class tLHMStatus
{
	const TABLE_NAME = 'tLHMStatus';
	const kLHMStatus = 'kLHMStatus';
	const kLHM = 'kLHM';
	const nStatus = 'nStatus';
	const dZeitstempel = 'dZeitstempel';
	const kBestellung = 'kBestellung';

	/** @var int kLHMStatus */
	public $kLHMStatus;

	/** @var int kLHM */
	public $kLHM;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBestellung */
	public $kBestellung;
}
