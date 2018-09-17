<?php

namespace App\Schema;

class tWarenlagerArtikelOptionen
{
	const TABLE_NAME = 'tWarenlagerArtikelOptionen';
	const kArtikel = 'kArtikel';
	const kWarenlager = 'kWarenlager';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kWMSLagerBereich = 'kWMSLagerBereich';
	const fMindestMenge = 'fMindestMenge';
	const fVorschlag = 'fVorschlag';
	const fNachschiebenAb = 'fNachschiebenAb';

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kWMSLagerBereich */
	public $kWMSLagerBereich;

	/** @var string fMindestMenge */
	public $fMindestMenge;

	/** @var string fVorschlag */
	public $fVorschlag;

	/** @var string fNachschiebenAb */
	public $fNachschiebenAb;
}
