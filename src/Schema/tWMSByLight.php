<?php

namespace App\Schema;

class tWMSByLight
{
	const TABLE_NAME = 'tWMSByLight';
	const kWMSByLight = 'kWMSByLight';
	const cId = 'cId';
	const kBenutzer = 'kBenutzer';
	const kWarenlager = 'kWarenlager';
	const dZeitstempel = 'dZeitstempel';
	const nTyp = 'nTyp';
	const nAktiv = 'nAktiv';
	const cArbeitsPlatz = 'cArbeitsPlatz';
	const kPickliste = 'kPickliste';
	const fPickAnzahl = 'fPickAnzahl';

	/** @var int kWMSByLight */
	public $kWMSByLight;

	/** @var string cId */
	public $cId;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nTyp */
	public $nTyp;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var string cArbeitsPlatz */
	public $cArbeitsPlatz;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var string fPickAnzahl */
	public $fPickAnzahl;
}
