<?php

namespace App\Schema;

class tAttribut
{
	const TABLE_NAME = 'tAttribut';
	const kAttribut = 'kAttribut';
	const nIstMehrsprachig = 'nIstMehrsprachig';
	const nIstFreifeld = 'nIstFreifeld';
	const nSortierung = 'nSortierung';
	const cBeschreibung = 'cBeschreibung';
	const nBezugstyp = 'nBezugstyp';
	const nAusgabeweg = 'nAusgabeweg';
	const nIstStandard = 'nIstStandard';
	const kFeldTyp = 'kFeldTyp';
	const cRegEx = 'cRegEx';
	const cGruppeName = 'cGruppeName';
	const nReadOnly = 'nReadOnly';

	/** @var int kAttribut */
	public $kAttribut;

	/** @var int nIstMehrsprachig */
	public $nIstMehrsprachig;

	/** @var int nIstFreifeld */
	public $nIstFreifeld;

	/** @var int nSortierung */
	public $nSortierung;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nBezugstyp */
	public $nBezugstyp;

	/** @var int nAusgabeweg */
	public $nAusgabeweg;

	/** @var int nIstStandard */
	public $nIstStandard;

	/** @var int kFeldTyp */
	public $kFeldTyp;

	/** @var resource cRegEx */
	public $cRegEx;

	/** @var resource cGruppeName */
	public $cGruppeName;

	/** @var int nReadOnly */
	public $nReadOnly;
}
