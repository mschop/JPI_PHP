<?php

namespace App\Schema;

class tBestellungAlt
{
	const TABLE_NAME = 'tBestellungAlt';
	const kBestellungAlt = 'kBestellungAlt';
	const kBestellungNeu = 'kBestellungNeu';
	const cBestellNr = 'cBestellNr';
	const dErstellt = 'dErstellt';
	const kInetBestellung = 'kInetBestellung';
	const cVersandInfo = 'cVersandInfo';
	const dVersandt = 'dVersandt';
	const cIdentCode = 'cIdentCode';
	const dLieferDatum = 'dLieferDatum';
	const kBestellHinweis = 'kBestellHinweis';
	const kShop = 'kShop';
	const kLogistik = 'kLogistik';
	const nPlatform = 'nPlatform';
	const fGutschein = 'fGutschein';
	const cInetBestellung = 'cInetBestellung';
	const cStatus = 'cStatus';

	/** @var int kBestellungAlt */
	public $kBestellungAlt;

	/** @var int kBestellungNeu */
	public $kBestellungNeu;

	/** @var string cBestellNr */
	public $cBestellNr;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kInetBestellung */
	public $kInetBestellung;

	/** @var string cVersandInfo */
	public $cVersandInfo;

	/** @var string dVersandt */
	public $dVersandt;

	/** @var string cIdentCode */
	public $cIdentCode;

	/** @var string dLieferDatum */
	public $dLieferDatum;

	/** @var int kBestellHinweis */
	public $kBestellHinweis;

	/** @var int kShop */
	public $kShop;

	/** @var int kLogistik */
	public $kLogistik;

	/** @var int nPlatform */
	public $nPlatform;

	/** @var string fGutschein */
	public $fGutschein;

	/** @var string cInetBestellung */
	public $cInetBestellung;

	/** @var string cStatus */
	public $cStatus;
}
