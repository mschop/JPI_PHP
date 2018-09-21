<?php

namespace App\Schema;

class ebay_globaletexte
{
	const TABLE_NAME = 'ebay_globaletexte';
	const kEbayGlobaleTexte = 'kEbayGlobaleTexte';
	const kEbayuser = 'kEbayuser';
	const cAGB = 'cAGB';
	const cBewertung = 'cBewertung';
	const cImpressum = 'cImpressum';
	const cLieferzeit = 'cLieferzeit';
	const cNachDerAuktion = 'cNachDerAuktion';
	const cUeberUns = 'cUeberUns';
	const cVersandVerpackung = 'cVersandVerpackung';
	const cWiderrufsrecht = 'cWiderrufsrecht';
	const cZahlungshinweis = 'cZahlungshinweis';
	const cAnzeigen = 'cAnzeigen';
	const COLUMN_NAMES = [
		'kEbayGlobaleTexte',
		'kEbayuser',
		'cAGB',
		'cBewertung',
		'cImpressum',
		'cLieferzeit',
		'cNachDerAuktion',
		'cUeberUns',
		'cVersandVerpackung',
		'cWiderrufsrecht',
		'cZahlungshinweis',
		'cAnzeigen',
	];
	const COLUMN_TYPES = [
		'kEbayGlobaleTexte' => 'int',
		'kEbayuser' => 'int',
		'cAGB' => 'varchar',
		'cBewertung' => 'varchar',
		'cImpressum' => 'varchar',
		'cLieferzeit' => 'varchar',
		'cNachDerAuktion' => 'varchar',
		'cUeberUns' => 'varchar',
		'cVersandVerpackung' => 'varchar',
		'cWiderrufsrecht' => 'varchar',
		'cZahlungshinweis' => 'varchar',
		'cAnzeigen' => 'varchar',
	];

	/** @var int kEbayGlobaleTexte */
	public $kEbayGlobaleTexte;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var string cAGB */
	public $cAGB;

	/** @var string cBewertung */
	public $cBewertung;

	/** @var string cImpressum */
	public $cImpressum;

	/** @var string cLieferzeit */
	public $cLieferzeit;

	/** @var string cNachDerAuktion */
	public $cNachDerAuktion;

	/** @var string cUeberUns */
	public $cUeberUns;

	/** @var string cVersandVerpackung */
	public $cVersandVerpackung;

	/** @var string cWiderrufsrecht */
	public $cWiderrufsrecht;

	/** @var string cZahlungshinweis */
	public $cZahlungshinweis;

	/** @var string cAnzeigen */
	public $cAnzeigen;
}
