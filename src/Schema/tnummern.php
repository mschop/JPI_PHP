<?php

namespace App\Schema;

class tnummern
{
	const TABLE_NAME = 'tnummern';
	const kBestellung = 'kBestellung';
	const kAngebot = 'kAngebot';
	const kRechnung = 'kRechnung';
	const kKunde = 'kKunde';
	const cInet = 'cInet';
	const COLUMN_NAMES = ['kBestellung', 'kAngebot', 'kRechnung', 'kKunde', 'cInet'];
	const COLUMN_TYPES = [
		'kBestellung' => 'int',
		'kAngebot' => 'int',
		'kRechnung' => 'int',
		'kKunde' => 'int',
		'cInet' => 'char',
	];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kAngebot */
	public $kAngebot;

	/** @var int kRechnung */
	public $kRechnung;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cInet */
	public $cInet;
}
