<?php

namespace App\Schema;

class tAbrechnungEinzelnachweis
{
	const TABLE_NAME = 'tAbrechnungEinzelnachweis';
	const kAbrechnungEinzelnachweis = 'kAbrechnungEinzelnachweis';
	const kAbrechnung = 'kAbrechnung';
	const kAbrechnungPos = 'kAbrechnungPos';
	const fAnzahl = 'fAnzahl';
	const nObjekt = 'nObjekt';
	const kObjektPk = 'kObjektPk';
	const dErstellt = 'dErstellt';
	const cHinweis = 'cHinweis';

	/** @var int kAbrechnungEinzelnachweis */
	public $kAbrechnungEinzelnachweis;

	/** @var int kAbrechnung */
	public $kAbrechnung;

	/** @var int kAbrechnungPos */
	public $kAbrechnungPos;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int nObjekt */
	public $nObjekt;

	/** @var int kObjektPk */
	public $kObjektPk;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var resource cHinweis */
	public $cHinweis;
}
