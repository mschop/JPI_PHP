<?php

namespace App\Schema;

class tintervall
{
	const TABLE_NAME = 'tintervall';
	const kIntervall = 'kIntervall';
	const kBestellung = 'kBestellung';
	const dStartdatum = 'dStartdatum';
	const dEnddatum = 'dEnddatum';
	const nAlleXTage = 'nAlleXTage';
	const nAlleXMonate = 'nAlleXMonate';
	const AmMonatsende = 'AmMonatsende';
	const nAlleXJahre = 'nAlleXJahre';
	const kLieferAdresse = 'kLieferAdresse';
	const kRechnungsAdresse = 'kRechnungsAdresse';
	const COLUMN_NAMES = [
		'kIntervall',
		'kBestellung',
		'dStartdatum',
		'dEnddatum',
		'nAlleXTage',
		'nAlleXMonate',
		'AmMonatsende',
		'nAlleXJahre',
		'kLieferAdresse',
		'kRechnungsAdresse',
	];
	const COLUMN_TYPES = [
		'kIntervall' => 'int',
		'kBestellung' => 'int',
		'dStartdatum' => 'datetime',
		'dEnddatum' => 'datetime',
		'nAlleXTage' => 'smallint',
		'nAlleXMonate' => 'smallint',
		'AmMonatsende' => 'smallint',
		'nAlleXJahre' => 'smallint',
		'kLieferAdresse' => 'int',
		'kRechnungsAdresse' => 'int',
	];

	/** @var int kIntervall */
	public $kIntervall;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string dStartdatum */
	public $dStartdatum;

	/** @var string dEnddatum */
	public $dEnddatum;

	/** @var int nAlleXTage */
	public $nAlleXTage;

	/** @var int nAlleXMonate */
	public $nAlleXMonate;

	/** @var int AmMonatsende */
	public $AmMonatsende;

	/** @var int nAlleXJahre */
	public $nAlleXJahre;

	/** @var int kLieferAdresse */
	public $kLieferAdresse;

	/** @var int kRechnungsAdresse */
	public $kRechnungsAdresse;
}
