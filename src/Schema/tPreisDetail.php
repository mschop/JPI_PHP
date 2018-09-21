<?php

namespace App\Schema;

class tPreisDetail
{
	const TABLE_NAME = 'tPreisDetail';
	const kPreis = 'kPreis';
	const nAnzahlAb = 'nAnzahlAb';
	const fNettoPreis = 'fNettoPreis';
	const fProzent = 'fProzent';
	const COLUMN_NAMES = ['kPreis', 'nAnzahlAb', 'fNettoPreis', 'fProzent'];
	const COLUMN_TYPES = ['kPreis' => 'int', 'nAnzahlAb' => 'int', 'fNettoPreis' => 'decimal', 'fProzent' => 'decimal'];

	/** @var int kPreis */
	public $kPreis;

	/** @var int nAnzahlAb */
	public $nAnzahlAb;

	/** @var string fNettoPreis */
	public $fNettoPreis;

	/** @var string fProzent */
	public $fProzent;
}
