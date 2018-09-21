<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kWarenLager' => 'int',
		'kWarenLagerGroesse' => 'int',
		'fGewichtMax' => 'decimal',
		'nAnzahlMax' => 'int',
		'fLaenge' => 'decimal',
		'fHoehe' => 'decimal',
		'fBreite' => 'decimal',
		'cKommentar' => 'varchar',
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
