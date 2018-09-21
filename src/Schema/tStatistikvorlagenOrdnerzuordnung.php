<?php

namespace App\Schema;

class tStatistikvorlagenOrdnerzuordnung
{
	const TABLE_NAME = 'tStatistikvorlagenOrdnerzuordnung';
	const kStatistikBenutzerordner = 'kStatistikBenutzerordner';
	const kStatistikvorlagenserialisierung = 'kStatistikvorlagenserialisierung';
	const COLUMN_NAMES = ['kStatistikBenutzerordner', 'kStatistikvorlagenserialisierung'];
	const COLUMN_TYPES = ['kStatistikBenutzerordner' => 'int', 'kStatistikvorlagenserialisierung' => 'int'];

	/** @var int kStatistikBenutzerordner */
	public $kStatistikBenutzerordner;

	/** @var int kStatistikvorlagenserialisierung */
	public $kStatistikvorlagenserialisierung;
}
