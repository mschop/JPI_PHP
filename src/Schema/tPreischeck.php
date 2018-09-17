<?php

namespace App\Schema;

class tPreischeck
{
	const TABLE_NAME = 'tPreischeck';
	const kPreischeck = 'kPreischeck';
	const kArtikel = 'kArtikel';
	const fVersand = 'fVersand';
	const fPreis = 'fPreis';
	const kPlattform = 'kPlattform';
	const cShop = 'cShop';
	const cAngebotsURL = 'cAngebotsURL';
	const cAngebotsname = 'cAngebotsname';
	const cLieferzeit = 'cLieferzeit';
	const nPrime = 'nPrime';
	const dErstellt = 'dErstellt';
	const cProductId = 'cProductId';
	const nProductIdType = 'nProductIdType';
	const nUploaded = 'nUploaded';

	/** @var int kPreischeck */
	public $kPreischeck;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fVersand */
	public $fVersand;

	/** @var string fPreis */
	public $fPreis;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cShop */
	public $cShop;

	/** @var string cAngebotsURL */
	public $cAngebotsURL;

	/** @var string cAngebotsname */
	public $cAngebotsname;

	/** @var string cLieferzeit */
	public $cLieferzeit;

	/** @var int nPrime */
	public $nPrime;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cProductId */
	public $cProductId;

	/** @var int nProductIdType */
	public $nProductIdType;

	/** @var int nUploaded */
	public $nUploaded;
}
