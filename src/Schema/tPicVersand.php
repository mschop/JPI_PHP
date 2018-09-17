<?php

namespace App\Schema;

class tPicVersand
{
	const TABLE_NAME = 'tPicVersand';
	const kArtikelBild = 'kArtikelBild';
	const kKategoriePict = 'kKategoriePict';
	const kEigenschaftWertPict = 'kEigenschaftWertPict';
	const kEA = 'kEA';
	const kShop = 'kShop';
	const dMod = 'dMod';

	/** @var int kArtikelBild */
	public $kArtikelBild;

	/** @var int kKategoriePict */
	public $kKategoriePict;

	/** @var int kEigenschaftWertPict */
	public $kEigenschaftWertPict;

	/** @var int kEA */
	public $kEA;

	/** @var int kShop */
	public $kShop;

	/** @var string dMod */
	public $dMod;
}