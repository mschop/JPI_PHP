<?php

namespace App\Db\Schema;

class tWarenLagerPlatzDefault
{
	const TABLE_NAME = 'tWarenLagerPlatzDefault';
	const kWarenLager = 'kWarenLager';
	const kWarenLagerGroesse = 'kWarenLagerGroesse';
	const fGewichtMax = 'fGewichtMax';
	const nAnzahlMax = 'nAnzahlMax';
	const fLaenge = 'fLaenge';
	const fHoehe = 'fHoehe';
	const fBreite = 'fBreite';
	const cKommentar = 'cKommentar';
	const COLUMN_NAMES = [
		'kWarenLager',
		'kWarenLagerGroesse',
		'fGewichtMax',
		'nAnzahlMax',
		'fLaenge',
		'fHoehe',
		'fBreite',
		'cKommentar',
	];
	const COLUMN_DEFINITIONS = [
		'kWarenLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerGroesse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGewichtMax' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlMax' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLaenge' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fHoehe' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBreite' => [
			'type' => 'decimal',
			'phpType' => 'string',
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
	];

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int kWarenLagerGroesse */
	public $kWarenLagerGroesse;

	/** @var string fGewichtMax */
	public $fGewichtMax;

	/** @var int nAnzahlMax */
	public $nAnzahlMax;

	/** @var string fLaenge */
	public $fLaenge;

	/** @var string fHoehe */
	public $fHoehe;

	/** @var string fBreite */
	public $fBreite;

	/** @var string cKommentar */
	public $cKommentar;
}
