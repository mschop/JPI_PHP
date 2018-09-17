<?php

namespace App\Schema;

class pf_amazon_retourpos
{
	const TABLE_NAME = 'pf_amazon_retourpos';
	const kAmazonRetourPos = 'kAmazonRetourPos';
	const kUser = 'kUser';
	const kAmazonBestellung = 'kAmazonBestellung';
	const cOrderId = 'cOrderId';
	const cSellerSKU = 'cSellerSKU';
	const cFremdSKU = 'cFremdSKU';
	const cASIN = 'cASIN';
	const cArtikelname = 'cArtikelname';
	const nMenge = 'nMenge';
	const cFulfillmentCenter = 'cFulfillmentCenter';
	const cArtikelzustand = 'cArtikelzustand';
	const cRueckgabegrund = 'cRueckgabegrund';
	const dRetourzeit = 'dRetourzeit';
	const nStatus = 'nStatus';
	const dEingelesen = 'dEingelesen';
	const kMessageId = 'kMessageId';
	const kGutschrift = 'kGutschrift';
	const cFehler = 'cFehler';
	const cLicencePlateNumber = 'cLicencePlateNumber';
	const cKundenkommentar = 'cKundenkommentar';

	/** @var int kAmazonRetourPos */
	public $kAmazonRetourPos;

	/** @var int kUser */
	public $kUser;

	/** @var int kAmazonBestellung */
	public $kAmazonBestellung;

	/** @var string cOrderId */
	public $cOrderId;

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var string cFremdSKU */
	public $cFremdSKU;

	/** @var string cASIN */
	public $cASIN;

	/** @var string cArtikelname */
	public $cArtikelname;

	/** @var int nMenge */
	public $nMenge;

	/** @var string cFulfillmentCenter */
	public $cFulfillmentCenter;

	/** @var string cArtikelzustand */
	public $cArtikelzustand;

	/** @var string cRueckgabegrund */
	public $cRueckgabegrund;

	/** @var string dRetourzeit */
	public $dRetourzeit;

	/** @var int nStatus */
	public $nStatus;

	/** @var string dEingelesen */
	public $dEingelesen;

	/** @var int kMessageId */
	public $kMessageId;

	/** @var int kGutschrift */
	public $kGutschrift;

	/** @var string cFehler */
	public $cFehler;

	/** @var string cLicencePlateNumber */
	public $cLicencePlateNumber;

	/** @var string cKundenkommentar */
	public $cKundenkommentar;
}
