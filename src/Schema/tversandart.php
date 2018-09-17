<?php

namespace App\Schema;

class tversandart
{
	const TABLE_NAME = 'tversandart';
	const kVersandArt = 'kVersandArt';
	const cName = 'cName';
	const fPrice = 'fPrice';
	const cAktiv = 'cAktiv';
	const cInet = 'cInet';
	const cZahlungsInfo = 'cZahlungsInfo';
	const fMwSt = 'fMwSt';
	const cDruckText = 'cDruckText';
	const fVKFreiAB = 'fVKFreiAB';
	const cAuftragsText = 'cAuftragsText';
	const fZusatzGewicht = 'fZusatzGewicht';
	const nEigeneVersandart = 'nEigeneVersandart';
	const kMainVersandart = 'kMainVersandart';
	const nVerwiegePflicht = 'nVerwiegePflicht';
	const nTrackingIDEingabePflicht = 'nTrackingIDEingabePflicht';
	const nExpress = 'nExpress';
	const cTrackingIDRegex = 'cTrackingIDRegex';
	const nTrackingIDVon = 'nTrackingIDVon';
	const nTrackingIDBis = 'nTrackingIDBis';
	const nPrioritaet = 'nPrioritaet';
	const nEtikettenDrucken = 'nEtikettenDrucken';
	const nEtikettenStartRueckfrage = 'nEtikettenStartRueckfrage';
	const kEtikettenFormular = 'kEtikettenFormular';
	const nVersandMailSenden = 'nVersandMailSenden';
	const nVersandSchnittstelle = 'nVersandSchnittstelle';
	const cTrackingUrlTemplate = 'cTrackingUrlTemplate';
	const cAmazonCarrierCode = 'cAmazonCarrierCode';
	const cEbayCarrierCode = 'cEbayCarrierCode';
	const kVersanddatenImportVorlage = 'kVersanddatenImportVorlage';
	const kVersanddatenExportVorlage = 'kVersanddatenExportVorlage';
	const nVersanddienstleister = 'nVersanddienstleister';
	const nAmazonPrime = 'nAmazonPrime';

	/** @var int kVersandArt */
	public $kVersandArt;

	/** @var string cName */
	public $cName;

	/** @var string fPrice */
	public $fPrice;

	/** @var string cAktiv */
	public $cAktiv;

	/** @var string cInet */
	public $cInet;

	/** @var string cZahlungsInfo */
	public $cZahlungsInfo;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string cDruckText */
	public $cDruckText;

	/** @var string fVKFreiAB */
	public $fVKFreiAB;

	/** @var string cAuftragsText */
	public $cAuftragsText;

	/** @var string fZusatzGewicht */
	public $fZusatzGewicht;

	/** @var int nEigeneVersandart */
	public $nEigeneVersandart;

	/** @var int kMainVersandart */
	public $kMainVersandart;

	/** @var int nVerwiegePflicht */
	public $nVerwiegePflicht;

	/** @var int nTrackingIDEingabePflicht */
	public $nTrackingIDEingabePflicht;

	/** @var int nExpress */
	public $nExpress;

	/** @var string cTrackingIDRegex */
	public $cTrackingIDRegex;

	/** @var int nTrackingIDVon */
	public $nTrackingIDVon;

	/** @var int nTrackingIDBis */
	public $nTrackingIDBis;

	/** @var int nPrioritaet */
	public $nPrioritaet;

	/** @var int nEtikettenDrucken */
	public $nEtikettenDrucken;

	/** @var int nEtikettenStartRueckfrage */
	public $nEtikettenStartRueckfrage;

	/** @var int kEtikettenFormular */
	public $kEtikettenFormular;

	/** @var int nVersandMailSenden */
	public $nVersandMailSenden;

	/** @var int nVersandSchnittstelle */
	public $nVersandSchnittstelle;

	/** @var string cTrackingUrlTemplate */
	public $cTrackingUrlTemplate;

	/** @var string cAmazonCarrierCode */
	public $cAmazonCarrierCode;

	/** @var string cEbayCarrierCode */
	public $cEbayCarrierCode;

	/** @var int kVersanddatenImportVorlage */
	public $kVersanddatenImportVorlage;

	/** @var int kVersanddatenExportVorlage */
	public $kVersanddatenExportVorlage;

	/** @var int nVersanddienstleister */
	public $nVersanddienstleister;

	/** @var int nAmazonPrime */
	public $nAmazonPrime;
}
