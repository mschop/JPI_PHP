<?php

namespace App\Db\Schema;

class tWMSPackItem
{
	const TABLE_NAME = 'tWMSPackItem';
	const kWMSPackItem = 'kWMSPackItem';
	const kArtikel = 'kArtikel';
	const fMenge = 'fMenge';
	const kPickliste = 'kPickliste';
	const kBestellung = 'kBestellung';
	const kBestellpos = 'kBestellpos';
	const kBestellStueckliste = 'kBestellStueckliste';
	const COLUMN_NAMES = [
		'kWMSPackItem',
		'kArtikel',
		'fMenge',
		'kPickliste',
		'kBestellung',
		'kBestellpos',
		'kBestellStueckliste',
	];
	const COLUMN_DEFINITIONS = [
		'kWMSPackItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
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
		'kBestellpos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellStueckliste' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWMSPackItem */
	public $kWMSPackItem;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fMenge */
	public $fMenge;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kBestellpos */
	public $kBestellpos;

	/** @var int kBestellStueckliste */
	public $kBestellStueckliste;
}
