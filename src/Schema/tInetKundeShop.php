<?php

namespace App\Schema;

class tInetKundeShop
{
	const TABLE_NAME = 'tInetKundeShop';
	const kInetKunde = 'kInetKunde';
	const kShop = 'kShop';
	const kKundenGruppe = 'kKundenGruppe';
	const dKundeSeit = 'dKundeSeit';
	const cInet = 'cInet';
	const kKunde = 'kKunde';
	const nRegistriert = 'nRegistriert';
	const cShopKundenNr = 'cShopKundenNr';

	/** @var int kInetKunde */
	public $kInetKunde;

	/** @var int kShop */
	public $kShop;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var string dKundeSeit */
	public $dKundeSeit;

	/** @var string cInet */
	public $cInet;

	/** @var int kKunde */
	public $kKunde;

	/** @var int nRegistriert */
	public $nRegistriert;

	/** @var string cShopKundenNr */
	public $cShopKundenNr;
}
