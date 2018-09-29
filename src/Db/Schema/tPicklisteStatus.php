<?php

namespace App\Db\Schema;

class tPicklisteStatus
{
	const TABLE_NAME = 'tPicklisteStatus';
	const kPicklisteStatus = 'kPicklisteStatus';
	const kPickliste = 'kPickliste';
	const kBenutzer = 'kBenutzer';
	const dZeitstempel = 'dZeitstempel';
	const nStatus = 'nStatus';
	const COLUMN_NAMES = ['kPicklisteStatus', 'kPickliste', 'kBenutzer', 'dZeitstempel', 'nStatus'];
	const COLUMN_DEFINITIONS = [
		'kPicklisteStatus' => [
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
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPicklisteStatus */
	public $kPicklisteStatus;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nStatus */
	public $nStatus;
}
