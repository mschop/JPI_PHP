<?php

namespace App\Db\Schema;

class tWmsInventurlog
{
	const TABLE_NAME = 'tWmsInventurlog';
	const kWmsInventurlog = 'kWmsInventurlog';
	const kWmsInventur = 'kWmsInventur';
	const kWarenlagerPlatz = 'kWarenlagerPlatz';
	const kArtikel = 'kArtikel';
	const dMHD = 'dMHD';
	const cCharge = 'cCharge';
	const fAnzahl = 'fAnzahl';
	const dZeitstempel = 'dZeitstempel';
	const kBenutzer = 'kBenutzer';
	const fDifferenz = 'fDifferenz';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = [
		'kWmsInventurlog',
		'kWmsInventur',
		'kWarenlagerPlatz',
		'kArtikel',
		'dMHD',
		'cCharge',
		'fAnzahl',
		'dZeitstempel',
		'kBenutzer',
		'fDifferenz',
		'nTyp',
	];
	const COLUMN_DEFINITIONS = [
		'kWmsInventurlog' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWmsInventur' => [
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
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dMHD' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cCharge' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
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
		'fDifferenz' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWmsInventurlog */
	public $kWmsInventurlog;

	/** @var int kWmsInventur */
	public $kWmsInventur;

	/** @var int kWarenlagerPlatz */
	public $kWarenlagerPlatz;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string dMHD */
	public $dMHD;

	/** @var string cCharge */
	public $cCharge;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string fDifferenz */
	public $fDifferenz;

	/** @var int nTyp */
	public $nTyp;
}
