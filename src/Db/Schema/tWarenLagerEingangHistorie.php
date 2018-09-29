<?php

namespace App\Db\Schema;

class tWarenLagerEingangHistorie
{
	const TABLE_NAME = 'tWarenLagerEingangHistorie';
	const kWarenLagerEingangHistorie = 'kWarenLagerEingangHistorie';
	const kWarenLagerEingang = 'kWarenLagerEingang';
	const kWarenLagerPlatzStart = 'kWarenLagerPlatzStart';
	const kWarenLagerPlatzZiel = 'kWarenLagerPlatzZiel';
	const dZeitstempel = 'dZeitstempel';
	const kBenutzer = 'kBenutzer';
	const cKommentar = 'cKommentar';
	const kBuchungsArt = 'kBuchungsArt';
	const kSessionID = 'kSessionID';
	const fAnzahl = 'fAnzahl';
	const kLHMStart = 'kLHMStart';
	const kLHMZiel = 'kLHMZiel';
	const COLUMN_NAMES = [
		'kWarenLagerEingangHistorie',
		'kWarenLagerEingang',
		'kWarenLagerPlatzStart',
		'kWarenLagerPlatzZiel',
		'dZeitstempel',
		'kBenutzer',
		'cKommentar',
		'kBuchungsArt',
		'kSessionID',
		'fAnzahl',
		'kLHMStart',
		'kLHMZiel',
	];
	const COLUMN_DEFINITIONS = [
		'kWarenLagerEingangHistorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
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
		'kWarenLagerPlatzStart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerPlatzZiel' => [
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
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
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
		'kBuchungsArt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSessionID' => [
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
		'kLHMStart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLHMZiel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWarenLagerEingangHistorie */
	public $kWarenLagerEingangHistorie;

	/** @var int kWarenLagerEingang */
	public $kWarenLagerEingang;

	/** @var int kWarenLagerPlatzStart */
	public $kWarenLagerPlatzStart;

	/** @var int kWarenLagerPlatzZiel */
	public $kWarenLagerPlatzZiel;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var int kBuchungsArt */
	public $kBuchungsArt;

	/** @var int kSessionID */
	public $kSessionID;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kLHMStart */
	public $kLHMStart;

	/** @var int kLHMZiel */
	public $kLHMZiel;
}
