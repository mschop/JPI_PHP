<?php

namespace App\Db\Schema;

class tBestellungPicklisteLock
{
	const TABLE_NAME = 'tBestellungPicklisteLock';
	const kBestellung = 'kBestellung';
	const kPickliste = 'kPickliste';
	const dZeitstempel = 'dZeitstempel';
	const COLUMN_NAMES = ['kBestellung', 'kPickliste', 'dZeitstempel'];
	const COLUMN_DEFINITIONS = [
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPickliste' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var string dZeitstempel */
	public $dZeitstempel;
}
