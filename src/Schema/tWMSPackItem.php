<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kWMSPackItem' => 'int',
		'kArtikel' => 'int',
		'fMenge' => 'decimal',
		'kPickliste' => 'int',
		'kBestellung' => 'int',
		'kBestellpos' => 'int',
		'kBestellStueckliste' => 'int',
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
