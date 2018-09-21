<?php

namespace App\Schema;

class tWarenLagerAusgang
{
	const TABLE_NAME = 'tWarenLagerAusgang';
	const kWarenLagerEingang = 'kWarenLagerEingang';
	const kLieferscheinPos = 'kLieferscheinPos';
	const fAnzahl = 'fAnzahl';
	const kWarenLagerAusgang = 'kWarenLagerAusgang';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kArtikel = 'kArtikel';
	const cKommentar = 'cKommentar';
	const dErstellt = 'dErstellt';
	const kBenutzer = 'kBenutzer';
	const kBuchungsart = 'kBuchungsart';
	const COLUMN_NAMES = [
		'kWarenLagerEingang',
		'kLieferscheinPos',
		'fAnzahl',
		'kWarenLagerAusgang',
		'kWarenLagerPlatz',
		'kArtikel',
		'cKommentar',
		'dErstellt',
		'kBenutzer',
		'kBuchungsart',
	];
	const COLUMN_TYPES = [
		'kWarenLagerEingang' => 'int',
		'kLieferscheinPos' => 'int',
		'fAnzahl' => 'decimal',
		'kWarenLagerAusgang' => 'int',
		'kWarenLagerPlatz' => 'int',
		'kArtikel' => 'int',
		'cKommentar' => 'varchar',
		'dErstellt' => 'datetime',
		'kBenutzer' => 'int',
		'kBuchungsart' => 'int',
	];

	/** @var int kWarenLagerEingang */
	public $kWarenLagerEingang;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kWarenLagerAusgang */
	public $kWarenLagerAusgang;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kBuchungsart */
	public $kBuchungsart;
}
