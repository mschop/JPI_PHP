<?php

namespace App\Schema;

class tinetbestellpos
{
	const TABLE_NAME = 'tinetbestellpos';
	const kInetBestellPos = 'kInetBestellPos';
	const kInetBestellung = 'kInetBestellung';
	const kArikel = 'kArikel';
	const fPreis = 'fPreis';
	const fMwSt = 'fMwSt';
	const nAnzahl = 'nAnzahl';
	const cName = 'cName';
	const kShop = 'kShop';
	const nType = 'nType';
	const cHinweis = 'cHinweis';
	const nHatUpload = 'nHatUpload';
	const cUnique = 'cUnique';
	const kKonfigitem = 'kKonfigitem';

	/** @var int kInetBestellPos */
	public $kInetBestellPos;

	/** @var int kInetBestellung */
	public $kInetBestellung;

	/** @var int kArikel */
	public $kArikel;

	/** @var string fPreis */
	public $fPreis;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string nAnzahl */
	public $nAnzahl;

	/** @var string cName */
	public $cName;

	/** @var int kShop */
	public $kShop;

	/** @var int nType */
	public $nType;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var int nHatUpload */
	public $nHatUpload;

	/** @var string cUnique */
	public $cUnique;

	/** @var int kKonfigitem */
	public $kKonfigitem;
}
