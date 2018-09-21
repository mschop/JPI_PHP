<?php

namespace App\Schema;

class tUmlagerung
{
	const TABLE_NAME = 'tUmlagerung';
	const kUmlagerung = 'kUmlagerung';
	const kQuellLager = 'kQuellLager';
	const kZielLager = 'kZielLager';
	const kStreckenLager = 'kStreckenLager';
	const kBestellung = 'kBestellung';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const nStatus = 'nStatus';
	const COLUMN_NAMES = [
		'kUmlagerung',
		'kQuellLager',
		'kZielLager',
		'kStreckenLager',
		'kBestellung',
		'kLieferantenBestellung',
		'nStatus',
	];
	const COLUMN_TYPES = [
		'kUmlagerung' => 'int',
		'kQuellLager' => 'int',
		'kZielLager' => 'int',
		'kStreckenLager' => 'int',
		'kBestellung' => 'int',
		'kLieferantenBestellung' => 'int',
		'nStatus' => 'tinyint',
	];

	/** @var int kUmlagerung */
	public $kUmlagerung;

	/** @var int kQuellLager */
	public $kQuellLager;

	/** @var int kZielLager */
	public $kZielLager;

	/** @var int kStreckenLager */
	public $kStreckenLager;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int nStatus */
	public $nStatus;
}
