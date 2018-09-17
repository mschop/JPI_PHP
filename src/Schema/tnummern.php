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
