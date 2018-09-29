<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kWarenLagerEingang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferscheinPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerAusgang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
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
		'kBuchungsart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
