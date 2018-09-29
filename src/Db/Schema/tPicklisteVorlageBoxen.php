<?php

namespace App\Db\Schema;

class tPicklisteVorlageBoxen
{
	const TABLE_NAME = 'tPicklisteVorlageBoxen';
	const kPicklisteVorlageBoxen = 'kPicklisteVorlageBoxen';
	const kPicklisteVorlage = 'kPicklisteVorlage';
	const kLHM = 'kLHM';
	const COLUMN_NAMES = ['kPicklisteVorlageBoxen', 'kPicklisteVorlage', 'kLHM'];
	const COLUMN_DEFINITIONS = [
		'kPicklisteVorlageBoxen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPicklisteVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLHM' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPicklisteVorlageBoxen */
	public $kPicklisteVorlageBoxen;

	/** @var int kPicklisteVorlage */
	public $kPicklisteVorlage;

	/** @var int kLHM */
	public $kLHM;
}
