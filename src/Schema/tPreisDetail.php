<?php

namespace App\Schema;

class tPreisDetail
{
	const TABLE_NAME = 'tPreisDetail';
	const kPreis = 'kPreis';
	const nAnzahlAb = 'nAnzahlAb';
	const fNettoPreis = 'fNettoPreis';
	const fProzent = 'fProzent';

	/** @var int kPreis */
	public $kPreis;

	/** @var int nAnzahlAb */
	public $nAnzahlAb;

	/** @var string fNettoPreis */
	public $fNettoPreis;

	/** @var string fProzent */
	public $fProzent;
}
