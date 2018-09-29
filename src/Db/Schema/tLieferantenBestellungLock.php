<?php

namespace App\Db\Schema;

class tLieferantenBestellungLock
{
	const TABLE_NAME = 'tLieferantenBestellungLock';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const kBenutzer = 'kBenutzer';
	const nSperreDurch = 'nSperreDurch';
	const dZeitstempel = 'dZeitstempel';
	const COLUMN_NAMES = ['kLieferantenBestellung', 'kBenutzer', 'nSperreDurch', 'dZeitstempel'];
	const COLUMN_DEFINITIONS = [
		'kLieferantenBestellung' => [
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
		'nSperreDurch' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
