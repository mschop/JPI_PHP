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
