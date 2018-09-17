<?php

namespace App\Schema;

class tKundenGruppe
{
	const TABLE_NAME = 'tKundenGruppe';
	const kKundenGruppe = 'kKundenGruppe';
	const cName = 'cName';
	const nStandard = 'nStandard';
	const nShopLogin = 'nShopLogin';
	const nNettoPreise = 'nNettoPreise';
	const fRabatt = 'fRabatt';
	const kKundenDrucktext = 'kKundenDrucktext';

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var string cName */
	public $cName;

	/** @var int nStandard */
	public $nStandard;

	/** @var int nShopLogin */
	public $nShopLogin;

	/** @var int nNettoPreise */
	public $nNettoPreise;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var int kKundenDrucktext */
	public $kKundenDrucktext;
}
