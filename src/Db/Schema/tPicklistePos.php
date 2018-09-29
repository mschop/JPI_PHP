<?php

namespace App\Db\Schema;

class tPicklistePos
{
	const TABLE_NAME = 'tPicklistePos';
	const kPicklistePos = 'kPicklistePos';
	const kPickliste = 'kPickliste';
	const kWarenLager = 'kWarenLager';
	const kWarenLagerEingang = 'kWarenLagerEingang';
	const fAnzahl = 'fAnzahl';
	const kBestellPos = 'kBestellPos';
	const kPicklistePosStatus = 'kPicklistePosStatus';
	const kArtikel = 'kArtikel';
	const kWarenlagerPlatz = 'kWarenlagerPlatz';
	const kPicklistePos_Ursprung = 'kPicklistePos_Ursprung';
	const kLieferscheinPos = 'kLieferscheinPos';
	const kBestellung = 'kBestellung';
	const nPickPrio = 'nPickPrio';
	const nStatus = 'nStatus';
	const kAnsprechpartner = 'kAnsprechpartner';
	const COLUMN_NAMES = [
		'kPicklistePos',
		'kPickliste',
		'kWarenLager',
		'kWarenLagerEingang',
		'fAnzahl',
		'kBestellPos',
		'kPicklistePosStatus',
		'kArtikel',
		'kWarenlagerPlatz',
		'kPicklistePos_Ursprung',
		'kLieferscheinPos',
		'kBestellung',
		'nPickPrio',
		'nStatus',
		'kAnsprechpartner',
	];
	const COLUMN_DEFINITIONS = [
		'kPicklistePos' => [
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
		'kWarenLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerEingang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'kBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPicklistePosStatus' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPicklistePos_Ursprung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferscheinPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPickPrio' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
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
		'kAnsprechpartner' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPicklistePos */
	public $kPicklistePos;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int kWarenLagerEingang */
	public $kWarenLagerEingang;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kPicklistePosStatus */
	public $kPicklistePosStatus;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kWarenlagerPlatz */
	public $kWarenlagerPlatz;

	/** @var int kPicklistePos_Ursprung */
	public $kPicklistePos_Ursprung;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int nPickPrio */
	public $nPickPrio;

	/** @var int nStatus */
	public $nStatus;

	/** @var int kAnsprechpartner */
	public $kAnsprechpartner;
}
