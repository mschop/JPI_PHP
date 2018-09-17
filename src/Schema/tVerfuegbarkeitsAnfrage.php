<?php

namespace App\Schema;

class tVerfuegbarkeitsAnfrage
{
	const TABLE_NAME = 'tVerfuegbarkeitsAnfrage';
	const kVerfuegbarkeitsanfrage = 'kVerfuegbarkeitsanfrage';
	const kArtikel = 'kArtikel';
	const kShop = 'kShop';
	const cEMail = 'cEMail';
	const dDatum = 'dDatum';
	const cName = 'cName';
	const cVorname = 'cVorname';
	const cAnrede = 'cAnrede';
	const kInetVerfuegbarkeit = 'kInetVerfuegbarkeit';
	const nStatus = 'nStatus';
	const dBenachrichtigtAm = 'dBenachrichtigtAm';

	/** @var int kVerfuegbarkeitsanfrage */
	public $kVerfuegbarkeitsanfrage;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kShop */
	public $kShop;

	/** @var string cEMail */
	public $cEMail;

	/** @var string dDatum */
	public $dDatum;

	/** @var string cName */
	public $cName;

	/** @var string cVorname */
	public $cVorname;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var int kInetVerfuegbarkeit */
	public $kInetVerfuegbarkeit;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dBenachrichtigtAm */
	public $dBenachrichtigtAm;
}
