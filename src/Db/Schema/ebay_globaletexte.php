<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kEbayGlobaleTexte' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEbayuser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAGB' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cBewertung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cImpressum' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cLieferzeit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cNachDerAuktion' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cUeberUns' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cVersandVerpackung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cWiderrufsrecht' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cZahlungshinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cAnzeigen' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
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
