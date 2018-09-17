<?php

namespace App\Schema;

class tkonfigitem
{
	const TABLE_NAME = 'tkonfigitem';
	const kKonfigitem = 'kKonfigitem';
	const kKonfiggruppe = 'kKonfiggruppe';
	const kArtikel = 'kArtikel';
	const nPosTyp = 'nPosTyp';
	const bSelektiert = 'bSelektiert';
	const bEmpfohlen = 'bEmpfohlen';
	const bName = 'bName';
	const bPreis = 'bPreis';
	const nSort = 'nSort';
	const bRabatt = 'bRabatt';
	const bZuschlag = 'bZuschlag';
	const fMin = 'fMin';
	const fMax = 'fMax';
	const fInitial = 'fInitial';
	const fStandardpreis = 'fStandardpreis';
	const bIgnoreMultiplier = 'bIgnoreMultiplier';

	/** @var int kKonfigitem */
	public $kKonfigitem;

	/** @var int kKonfiggruppe */
	public $kKonfiggruppe;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nPosTyp */
	public $nPosTyp;

	/** @var int bSelektiert */
	public $bSelektiert;

	/** @var int bEmpfohlen */
	public $bEmpfohlen;

	/** @var int bName */
	public $bName;

	/** @var int bPreis */
	public $bPreis;

	/** @var int nSort */
	public $nSort;

	/** @var int bRabatt */
	public $bRabatt;

	/** @var int bZuschlag */
	public $bZuschlag;

	/** @var string fMin */
	public $fMin;

	/** @var string fMax */
	public $fMax;

	/** @var string fInitial */
	public $fInitial;

	/** @var string fStandardpreis */
	public $fStandardpreis;

	/** @var int bIgnoreMultiplier */
	public $bIgnoreMultiplier;
}
