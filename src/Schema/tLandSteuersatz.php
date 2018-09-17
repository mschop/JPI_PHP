<?php

namespace App\Schema;

class tLandSteuersatz
{
	const TABLE_NAME = 'tLandSteuersatz';
	const cISOLand = 'cISOLand';
	const cKuerzelBundesland = 'cKuerzelBundesland';
	const fStarkErmaessigterSatz = 'fStarkErmaessigterSatz';
	const fErmaessigterSatzNiedrig = 'fErmaessigterSatzNiedrig';
	const fErmaessigterSatz = 'fErmaessigterSatz';
	const fNormalerSatz = 'fNormalerSatz';
	const fZwischensatz = 'fZwischensatz';
	const fLieferschwelle = 'fLieferschwelle';

	/** @var string cISOLand */
	public $cISOLand;

	/** @var string cKuerzelBundesland */
	public $cKuerzelBundesland;

	/** @var string fStarkErmaessigterSatz */
	public $fStarkErmaessigterSatz;

	/** @var string fErmaessigterSatzNiedrig */
	public $fErmaessigterSatzNiedrig;

	/** @var string fErmaessigterSatz */
	public $fErmaessigterSatz;

	/** @var string fNormalerSatz */
	public $fNormalerSatz;

	/** @var string fZwischensatz */
	public $fZwischensatz;

	/** @var string fLieferschwelle */
	public $fLieferschwelle;
}
