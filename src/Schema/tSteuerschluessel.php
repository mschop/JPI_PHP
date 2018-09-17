<?php

namespace App\Schema;

class tSteuerschluessel
{
	const TABLE_NAME = 'tSteuerschluessel';
	const kSteuerschluessel = 'kSteuerschluessel';
	const cName = 'cName';
	const cSteuerkonto = 'cSteuerkonto';
	const cSkontokonto = 'cSkontokonto';
	const cBonuskonto = 'cBonuskonto';
	const cErloeskonto = 'cErloeskonto';
	const cAusbuchungskonto = 'cAusbuchungskonto';
	const cAnzahlungskonto = 'cAnzahlungskonto';
	const nAnzahlung = 'nAnzahlung';
	const nAutomatik = 'nAutomatik';
	const nSchluesselnummer = 'nSchluesselnummer';

	/** @var int kSteuerschluessel */
	public $kSteuerschluessel;

	/** @var string cName */
	public $cName;

	/** @var string cSteuerkonto */
	public $cSteuerkonto;

	/** @var string cSkontokonto */
	public $cSkontokonto;

	/** @var string cBonuskonto */
	public $cBonuskonto;

	/** @var string cErloeskonto */
	public $cErloeskonto;

	/** @var string cAusbuchungskonto */
	public $cAusbuchungskonto;

	/** @var string cAnzahlungskonto */
	public $cAnzahlungskonto;

	/** @var int nAnzahlung */
	public $nAnzahlung;

	/** @var int nAutomatik */
	public $nAutomatik;

	/** @var int nSchluesselnummer */
	public $nSchluesselnummer;
}
