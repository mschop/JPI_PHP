<?php

namespace App\Schema;

class tArtikelAbnahme
{
	const TABLE_NAME = 'tArtikelAbnahme';
	const kArtikel = 'kArtikel';
	const kKundengruppe = 'kKundengruppe';
	const fIntervall = 'fIntervall';
	const fMindestabnahme = 'fMindestabnahme';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var string fIntervall */
	public $fIntervall;

	/** @var string fMindestabnahme */
	public $fMindestabnahme;
}
