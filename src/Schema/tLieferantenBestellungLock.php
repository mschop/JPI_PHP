<?php

namespace App\Schema;

class tLieferantenBestellungLock
{
	const TABLE_NAME = 'tLieferantenBestellungLock';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kBenutzer = 'kBenutzer';
	const nSperreDurch = 'nSperreDurch';
	const dZeitstempel = 'dZeitstempel';
	const COLUMN_NAMES = ['kLieferantenBestellung', 'kBenutzer', 'nSperreDurch', 'dZeitstempel'];
	const COLUMN_TYPES = [
		'kLieferantenBestellung' => 'int',
		'kBenutzer' => 'int',
		'nSperreDurch' => 'tinyint',
		'dZeitstempel' => 'datetime',
	];

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nSperreDurch */
	public $nSperreDurch;

	/** @var string dZeitstempel */
	public $dZeitstempel;
}
