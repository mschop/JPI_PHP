<?php

namespace App\Db\Schema;

class tPicklistenVorschauSync
{
	const TABLE_NAME = 'tPicklistenVorschauSync';
	const kPicklisteVorlage = 'kPicklisteVorlage';
	const dLastUpdate = 'dLastUpdate';
	const nAnzahl = 'nAnzahl';
	const COLUMN_NAMES = ['kPicklisteVorlage', 'dLastUpdate', 'nAnzahl'];
	const COLUMN_DEFINITIONS = [
		'kPicklisteVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLastUpdate' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahl' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPicklisteVorlage */
	public $kPicklisteVorlage;

	/** @var string dLastUpdate */
	public $dLastUpdate;

	/** @var int nAnzahl */
	public $nAnzahl;
}
