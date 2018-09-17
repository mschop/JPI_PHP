<?php

namespace App\Schema;

class ebay_einstellungen
{
	const TABLE_NAME = 'ebay_einstellungen';
	const kEbayEinstellungen = 'kEbayEinstellungen';
	const nCheckout = 'nCheckout';
	const nVEAN = 'nVEAN';
	const nVISBN = 'nVISBN';
	const nVUPC = 'nVUPC';
	const nVEPID = 'nVEPID';
	const nVHAN = 'nVHAN';
	const nArtnamenutzen = 'nArtnamenutzen';
	const nUsePremium = 'nUsePremium';
	const nUseGalleryPlus = 'nUseGalleryPlus';
	const nVersandartPraefixVerwenden = 'nVersandartPraefixVerwenden';
	const nNichtLaufendeLoeschen = 'nNichtLaufendeLoeschen';
	const cAuftraegeAusgabeweg = 'cAuftraegeAusgabeweg';

	/** @var int kEbayEinstellungen */
	public $kEbayEinstellungen;

	/** @var int nCheckout */
	public $nCheckout;

	/** @var int nVEAN */
	public $nVEAN;

	/** @var int nVISBN */
	public $nVISBN;

	/** @var int nVUPC */
	public $nVUPC;

	/** @var int nVEPID */
	public $nVEPID;

	/** @var int nVHAN */
	public $nVHAN;

	/** @var int nArtnamenutzen */
	public $nArtnamenutzen;

	/** @var int nUsePremium */
	public $nUsePremium;

	/** @var int nUseGalleryPlus */
	public $nUseGalleryPlus;

	/** @var int nVersandartPraefixVerwenden */
	public $nVersandartPraefixVerwenden;

	/** @var int nNichtLaufendeLoeschen */
	public $nNichtLaufendeLoeschen;

	/** @var string cAuftraegeAusgabeweg */
	public $cAuftraegeAusgabeweg;
}
