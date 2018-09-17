<?php

namespace App\Schema;

class tStatistikvorlagenOrdnerzuordnung
{
	const TABLE_NAME = 'tStatistikvorlagenOrdnerzuordnung';
	const kStatistikBenutzerordner = 'kStatistikBenutzerordner';
	const kStatistikvorlagenserialisierung = 'kStatistikvorlagenserialisierung';

	/** @var int kStatistikBenutzerordner */
	public $kStatistikBenutzerordner;

	/** @var int kStatistikvorlagenserialisierung */
	public $kStatistikvorlagenserialisierung;
}
