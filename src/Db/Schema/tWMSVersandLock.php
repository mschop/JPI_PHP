<?php

namespace App\Db\Schema;

class tWMSVersandLock
{
	const TABLE_NAME = 'tWMSVersandLock';
	const kWMSVersandLock = 'kWMSVersandLock';
	const kPickliste = 'kPickliste';
	const kBestellung = 'kBestellung';
	const nSort = 'nSort';
	const kBenutzer = 'kBenutzer';
	const dDatum = 'dDatum';
	const COLUMN_NAMES = ['kWMSVersandLock', 'kPickliste', 'kBestellung', 'nSort', 'kBenutzer', 'dDatum'];
	const COLUMN_DEFINITIONS = [
		'kWMSVersandLock' => [
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
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dDatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWMSVersandLock */
	public $kWMSVersandLock;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int nSort */
	public $nSort;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dDatum */
	public $dDatum;
}
