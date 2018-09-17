<?php

namespace App\Schema;

class tVersand
{
	const TABLE_NAME = 'tVersand';
	const kVersand = 'kVersand';
	const kLieferschein = 'kLieferschein';
	const kBenutzer = 'kBenutzer';
	const kLogistik = 'kLogistik';
	const cIdentCode = 'cIdentCode';
	const dErstellt = 'dErstellt';
	const cHinweis = 'cHinweis';
	const fGewicht = 'fGewicht';
	const kVersandArt = 'kVersandArt';
	const cLogistiker = 'cLogistiker';
	const cFulfillmentCenter = 'cFulfillmentCenter';
	const dAnkunftszeit = 'dAnkunftszeit';
	const nVerpackZeitSek = 'nVerpackZeitSek';
	const dVersendet = 'dVersendet';
	const nStatus = 'nStatus';
	const cShipmentId = 'cShipmentId';
	const cReference = 'cReference';

	/** @var int kVersand */
	public $kVersand;

	/** @var int kLieferschein */
	public $kLieferschein;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kLogistik */
	public $kLogistik;

	/** @var string cIdentCode */
	public $cIdentCode;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var string fGewicht */
	public $fGewicht;

	/** @var int kVersandArt */
	public $kVersandArt;

	/** @var string cLogistiker */
	public $cLogistiker;

	/** @var string cFulfillmentCenter */
	public $cFulfillmentCenter;

	/** @var string dAnkunftszeit */
	public $dAnkunftszeit;

	/** @var int nVerpackZeitSek */
	public $nVerpackZeitSek;

	/** @var string dVersendet */
	public $dVersendet;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cShipmentId */
	public $cShipmentId;

	/** @var string cReference */
	public $cReference;
}
