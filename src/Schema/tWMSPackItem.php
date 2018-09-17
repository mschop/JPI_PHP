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
