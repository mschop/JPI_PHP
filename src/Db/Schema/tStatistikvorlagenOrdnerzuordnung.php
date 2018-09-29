<?php

namespace App\Db\Schema;

class tStatistikvorlagenOrdnerzuordnung
{
	const TABLE_NAME = 'tStatistikvorlagenOrdnerzuordnung';
	const kStatistikBenutzerordner = 'kStatistikBenutzerordner';
	const kStatistikvorlagenserialisierung = 'kStatistikvorlagenserialisierung';
	const COLUMN_NAMES = ['kStatistikBenutzerordner', 'kStatistikvorlagenserialisierung'];
	const COLUMN_DEFINITIONS = [
		'kStatistikBenutzerordner' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStatistikvorlagenserialisierung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kStatistikBenutzerordner */
	public $kStatistikBenutzerordner;

	/** @var int kStatistikvorlagenserialisierung */
	public $kStatistikvorlagenserialisierung;
}
