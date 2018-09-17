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
